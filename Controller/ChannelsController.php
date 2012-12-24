<?php

require 'Model/Channels.php';
require 'Model/Articles.php';

class ChannelsController
{

    public function index()
    {
        if ($_SESSION['id'])
            {
            $channels = new Channels();
            $table = $channels->getChannels($_SESSION['id']);

            $this->smarty->assign('table', $table);
            $content = $this->smarty->fetch("View/Channels.tpl");
            $this->smarty->assign('content', $content);
            $this->smarty->display("Index.tpl");
            }
        else
            header("Location: /");
    }

    public function importNews()
    {

        if (isset($_SESSION['id']))
            {
            $channels = new Channels();
            if ($_POST['importBtn'] == "pressed")
                {
                $row = $channels->getDataChannel($_SESSION['id'], $_GET['import_id']);
                $xml = new XmlParser($row['url'], $row['numNews']);
                $xml = $xml->content;
                $post = $_POST;
                $articles = new Articles();
                foreach ($xml as $key => $value)
                {
                    if ($post['import_' . $key] == 'import')
                        {
                        $value['title'] = $value['title'];
                        $value['description'] = $value['description'];
                        $value['content'] = $value['content'];
                        $articles->addArticle($_SESSION['id'], $value['title'], $value['description'], $value['content']);
                        }
                }
                header("Location: http://" . $_SERVER['SERVER_NAME'] . '/channels');
                } else
                {
                if (isset($_GET['import_id']))
                    {
                    $row = $channels->getDataChannel($_SESSION['id'], $_GET['import_id']);
                    $xml = new XmlParser($row['url'], $row['numNews']);
                    $xml = $xml->content;
                    $this->smarty->assign('table', $xml);
                    $content = $this->smarty->fetch("View/ImportNews.tpl");
                    $this->smarty->assign('content', $content);
                    $this->smarty->display("Index.tpl");
                    } else
                    {
                    header("Location: http://" . $_SERVER['SERVER_NAME'] . '/channels');
                    }
                }
            }
        else
            header("Location: /");
    }

    public function editChannel()
    {
        if (isset($_SESSION['id']))
            {
            $this->smarty->assign('buttonText', "Изменить канал");
            $this->smarty->assign('action', "editChannel?change_id=" . $_GET['change_id']);
            $this->smarty->assign('PressButton', "isChangeChannel");

            if (isset($_POST['isChangeChannel']))
                {

                $url = htmlspecialchars($_POST['url']);
                $description = htmlspecialchars($_POST['description']);
                $numNews = htmlspecialchars($_POST['numNews']);

                $urlPattern = "/^(http|https):\/\/.*$/";
                $numbersOnlyPattern = "/^(\d)*$/";
                $amount = preg_match($urlPattern, $url);
                $numberOnly = preg_match($numbersOnlyPattern, $numNews);
                $userId = 1;

                if ($amount != 1)
                    {
                    $urlError = "Не верно введен url (Пример: http://example.com/rss.xml)";
                    }

                if (!$numberOnly)
                    {
                    $numError = "Разрешены только цифры";
                    }

                //если ошибок ввода нет
                if ($amount == 1 && $numberOnly)
                    {
                    $channels = new Channels();
                    $channels->updateChannel($_SESSION['id'], $_GET['change_id'], $url, $description, $numNews);
                    header("Location: http://" . $_SERVER['SERVER_NAME'] . '/channels');
                    } else
                    {
                    $this->smarty->assign('urlError', $urlError);
                    $this->smarty->assign('numError', $numError);
                    $addChannelForm = $this->smarty->fetch('AddChannel.tpl');
                    $this->smarty->assign('content', $addChannelForm);
                    $this->smarty->display('index.tpl');
                    }
                } else
                {
                if (isset($_REQUEST['change_id']))
                    {
                    $channels = new Channels();
                    $array = $channels->getDataChannel($_SESSION['id'], $_GET['change_id']);
                    $this->smarty->assign('url', $array['url']);
                    $this->smarty->assign('description', $array['description']);
                    $this->smarty->assign('numNews', $array['numNews']);

                    $addChannelForm = $this->smarty->fetch('AddChannel.tpl');
                    $this->smarty->assign('content', $addChannelForm);
                    $this->smarty->display('index.tpl');
                    }
                else
                    header("Location: http://" . $_SERVER['SERVER_NAME'] . '/channels');
                }
            }
        else
            {
            header("Location: /");
            }
    }

    public function addPage()
    {
        if (isset($_SESSION['id']))
            {
            $this->smarty->assign('buttonText', "Добавить канал");
            $this->smarty->assign('action', "./addpage");
            $this->smarty->assign('PressButton', "isAddChannel");

            if ($_POST['isAddChannel'] == 'yes')
                {
                $url = htmlspecialchars($_POST['url']);
                $description = htmlspecialchars($_POST['description']);
                $numNews = htmlspecialchars($_POST['numNews']);
                $urlPattern = "/^(http|https):\/\/.*$/";
                $numbersOnlyPattern = "/^(\d)*$/";
                $amount = preg_match($urlPattern, $url);
                $numberOnly = preg_match($numbersOnlyPattern, $numNews);
                $userId = 1;

                if ($amount != 1)
                    {
                    $urlError = "Не верно введен url (Пример: http://example.com/rss.xml)";
                    }
                if (!$numberOnly)
                    {
                    $numError = "Разрешены только цифры";
                    }

                //если ошибок ввода нет
                if ($amount == 1 && $numberOnly)
                    {
                    $channels = new Channels();
                    $channels->addChannels($userId, $url, $description, $numNews);
                    header("Location: http://" . $_SERVER['SERVER_NAME'] . '/channels');
                    } else
                    {
                    $this->smarty->assign('urlError', $urlError);
                    $this->smarty->assign('numError', $numError);
                    $addChannelForm = $this->smarty->fetch('AddChannel.tpl');
                    $this->smarty->assign('content', $addChannelForm);
                    $this->smarty->display('index.tpl');
                    }
                }
            //если кнопка добавить не была нажата
            else
                {

                $addChannelForm = $this->smarty->fetch('AddChannel.tpl');
                $this->smarty->assign('content', $addChannelForm);
                $this->smarty->display('index.tpl');
                }
            } else
            {
            header("Location: /");
            }
    }

    public function deleteChannel()
    {
        if (isset($_SESSION['id']))
            {
            $channel_id = $_GET['delete_id'];
            $channels = new Channels();
            $channels->deleteChannel($_SESSION['id'], $channel_id);
            header("Location: http://" . $_SERVER['SERVER_NAME'] . '/channels');
            } else
            {
            header("Location: /");
            }
    }

}