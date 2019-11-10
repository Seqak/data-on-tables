<?php
session_start();

require('../vendor/autoload.php');
require('../model/dbconnect.php');
require('../model/Users.php');
require('../model/ViewUser.php');



$users = new ViewUser();
$arr = $users->showUsers();


$loader = new Twig_Loader_Filesystem('../views');
$twig = new Twig_Environment($loader);

echo $twig->render('index.html', array(

    'factory' => array(

        'firmaA' => $arr[0],
        'firmaB' => $arr[1],
        'firmaC' => $arr[2],
        'firmaD' => $arr[3],
    ),
));



?>