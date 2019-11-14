<?php
session_start();

require('../vendor/autoload.php');
require('../model/dbconnect.php');





$loader = new Twig_Loader_Filesystem('../views');
$twig = new Twig_Environment($loader);

echo $twig->render('addclient.html', array());

?>