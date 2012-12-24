<?php
session_start();
require 'Model/Users.php';
require 'Misc/XmlParser.php';
include './Libs/smarty/Smarty.class.php';
include 'Router.php';
include 'Misc/config.php';
include 'Bootstrap.php';

$router = new Router();
$load = new Bootstap();
$load->boot();
$router->routing($load->smarty);