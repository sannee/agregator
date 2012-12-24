<?php

class Bootstap
{

    public $smarty;

    public function boot()
    {
        $this->smarty = new Smarty();
        $this->smarty->template_dir = 'View';
        $this->smarty->compile_dir = 'Cache';
        $user = new Users();
        if ($user->existsUser($_SESSION['id'], $_SESSION['password']))
            {
            $this->smarty->assign('login', htmlspecialchars($_SESSION['login']));
            $autorize = $this->smarty->fetch("View/login.tpl");
            $this->smarty->assign('autorize', $autorize);
            } else
            {
            session_unset();
            $autorize = $this->smarty->fetch("View/autorize.tpl");
            $this->smarty->assign('autorize', $autorize);
            $content = $this->smarty->fetch("View/unlogin.tpl");
            $this->smarty->assign('content', $content);
            }
    }

}

