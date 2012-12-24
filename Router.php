<?php

class Router
{

    var $url;

    public function routing($smarty)
    {
        $url = $_SERVER['REQUEST_URI'];
        $this->url = $url;
        $cntrl = $this->urlParser();

        if (empty($cntrl['controller']))
            {
            $cntrl['controller'] = 'index';
            }
        if (empty($cntrl['method']))
            {
            $cntrl['method'] = 'index';
            }
        if (file_exists("Controller/" . $cntrl['controller'] . "Controller.php"))
            {
            include 'Controller/' . $cntrl['controller'] . 'Controller.php';
            $class = $cntrl['controller'] . 'Controller';
            $controller = new $class();
            $controller->smarty = $smarty;
            if (!method_exists($controller, $cntrl['method']))
                {
                $cntrl['controller'] = 'Error';
                $cntrl['method'] = 'index';
                include 'Controller/' . $cntrl['controller'] . 'Controller.php';
                }
            } else
            {
            $cntrl['controller'] = 'Error';
            $cntrl['method'] = 'index';
            include 'Controller/' . $cntrl['controller'] . 'Controller.php';
            }

        $class = $cntrl['controller'] . 'Controller';
        $controller = new $class();
        $controller->smarty = $smarty;
        call_user_func(array($controller, $cntrl['method']));
    }

    private function urlParser()
    {
        $host = explode("?", $this->url);
        $pattern2 = "/(\/)(?=(\/))/";
        $result = preg_replace($pattern2, "", $host);
        $result = explode("/", $result[0], 3);
        $array = array("controller" => $result[1], "method" => $result[2]);
        return $array;
    }

}

