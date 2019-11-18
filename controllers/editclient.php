<?php
session_start();
require('../vendor/autoload.php');
require('../model/dbconnect.php');
require('../model/getuser.php');
require_once('classes/fieldvalidator.php');
require_once('classes/namenvailability.php');



if (isset($_GET['id'])) {
    $clientID = $_GET['id'];
    unset($_GET);
}
else{
    header('Location: index.php');
    exit();
}

$clientObejct = new GetUser();
$clientInfo = $clientObejct->getOneUser($clientID);






$loader = new Twig_Loader_Filesystem('../views');
$twig = new Twig_Environment($loader);

echo $twig->render('editclient.html', array(

    'clientValue' => $clientInfo,

  
));

?>