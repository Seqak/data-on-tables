<?php
session_start();
require('../vendor/autoload.php');
require('../model/dbconnect.php');
require('../model/getuser.php');
require_once('classes/fieldvalidator.php');
require_once('classes/namenvailability.php');
require('../model/updateclient.php');



if (isset($_GET['id'])) {
    $clientID = $_GET['id'];
    unset($_GET);

    $clientObejct = new GetUser();
    $rows = $clientObejct->checkUser($clientID);
    
    if ($rows <= 0) {
        header('Location: index.php');
        exit();
    } 
}
else{
    header('Location: index.php');
    exit();
}

$clientInfo = $clientObejct->getOneUser($clientID);

if (isset($_POST['clientEditButton'])) {

    $validator = new FieldValidator();
    $nameErro = $validator->checkName($_POST['clientName']);
    $packageErro = $validator->checkPackage($_POST['clientPackage']);
    $startErro = $validator->checkDate($_POST['clientStart']);
    $endErro = $validator->checkDate($_POST['clientEnd']);

    $nameAvailability = new NameAvailability();
    $nameErroSec = $nameAvailability->checkNewName($clientInfo['name'], $_POST['clientName']);

    if ($nameErro == false && $packageErro == false && $startErro == false && $endErro == false && $nameErroSec == false) {
        $validationResult = true;
    }
    else{
        $validationResult = false;
    }
}


if (isset($validationResult)) {

    if ($validationResult == true) {
    
        $updateClient = new UpdateClient();
        $updateClient->updateUser($clientID, $_POST['clientName'], $_POST['clientPackage'], $_POST['clientStart'], $_POST['clientEnd']);
    }
}


$loader = new Twig_Loader_Filesystem('../views');
$twig = new Twig_Environment($loader);

echo $twig->render('editclient.html', array(

    'clientValue' => @$clientInfo,
    'name_error' => @$nameErro,
    'package_erro' => @$packageErro,
    'start_erro' => @$startErro,
    'end_erro' => @$endErro,
    'name_ava_erro' => @$nameErroSec,

  
));

?>