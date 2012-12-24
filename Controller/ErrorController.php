<?php

class ErrorController
{

    public function index()
    {
        $content = file_get_contents("View/404.tpl");
        $this->smarty->assign('content', $content);
       $this->smarty->display("Index.tpl");
    }


}