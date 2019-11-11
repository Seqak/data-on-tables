<?php
session_start();

require('../vendor/autoload.php');
require('../model/dbconnect.php');
require('../model/Users.php');
require('../model/ViewUser.php');





if (isset($_POST['val'])) {
    echo "sieeeemmmaa";
}




















































$users = new ViewUser();
$arr = $users->showUsers();


$loader = new Twig_Loader_Filesystem('../views');
$twig = new Twig_Environment($loader);

echo $twig->render('index.html', array(

    'factory' => $arr,
  
));



?>