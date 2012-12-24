<?php

require 'Model/Articles.php';

class IndexController
{

    public function index()
    {
        if (isset($_SESSION['id']))
            {
            $articles = new Articles();
            $artcls = $articles->getActicles($_SESSION['id'], 0, 100000000);
            $this->smarty->assign('articles', $artcls);
            }
        $this->smarty->display("Index.tpl");
    }

    public function deleteNews()
    {
        if (isset($_GET['delete_id']) && isset($_SESSION['id']))
            {
            $articles = new Articles();
            $articles->deleteArticle($_GET['delete_id'], $_SESSION['id']);
            }
        header("Location: /");
    }

    public function MoreNews()
    {
        if (isset($_GET['MoreID']) && isset($_SESSION['id']))
            {
            $articles = new Articles();
            $article = $articles->getArticle($_GET['MoreID'], $_SESSION['id']);
            $arts[0] = $article;
            $this->smarty->assign('articles', $arts);
            $this->smarty->assign('more', 1);
            $this->smarty->display("Index.tpl");
            }
        else
            header("Location: /");
    }

    public function autorize()
    {
        $login = $_POST['login'];
        $password = $_POST['password'];
        $users = new Users();
        $user = $users->getUser($login, md5($password));

        if ($user)
            {
            $_SESSION['id'] = mysql_escape_string($user['id']);
            $_SESSION['login'] = $user['login'];
            $_SESSION['password'] = $user['pass'];
            }
        header("Location: /");
    }

    public function registration()
    {
        if (empty($_SESSION))
            {
            if (!empty($_POST['login']) && !empty($_POST['email']) && !empty($_POST['pass1']) && !empty($_POST['pass2']))
                {
                $user = new Users();
                if (!$user->existsUserFromLogin($_POST['login']))
                    {
                    if (preg_match("|^([a-z0-9_\.\-\]{1,20})@([a-z0-9\.\-]{1,20})\.([a-z]{2,4})|is", $_POST['email']))
                        {
                        if ($_POST['pass1'] === $_POST['pass2'])
                            {
                            $user->addUser($_POST['login'], md5($_POST['pass1']), $_POST['email']);
                            $u = $user->getUser($_POST['login'], md5($_POST['pass1']));
                            $_SESSION['id'] = $u['id'];
                            $_SESSION['login'] = $u['login'];
                            $_SESSION['password'] = $u['password'];
                            header("Location: /");
                            } else
                            {
                            $error = "Пароли не совпадают";
                            }
                        } else
                        {
                        $error = "Не правильный Email";
                        }
                    } else
                    {
                    $error = "Такой пользователь уже существует";
                    }
                if ($error)
                    {
                    $this->smarty->assign('error', $error);
                    $registration = $this->smarty->fetch('registration.tpl');
                    $this->smarty->assign('content', $registration);
                    $this->smarty->display("Index.tpl");
                    }
                } else
                {
                if (isset($_POST['reg']))
                    {
                    $error = "Не все поля заполнены";
                    }

                $this->smarty->assign('error', $error);
                $registration = $this->smarty->fetch('registration.tpl');
                $this->smarty->assign('content', $registration);
                $this->smarty->display("Index.tpl");
                }
            }
        else
            header("Location: /");
    }

    public function unlogin()
    {
        session_unset();
        header("Location: /");
    }

}