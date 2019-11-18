<?php
session_start();

require('../vendor/autoload.php');
require('../model/dbconnect.php');
require_once('classes/fieldvalidator.php');
require_once('classes/namenvailability.php');
require('../model/addnewuser.php');

if (isset($_POST['clientAddButton'])) {

    foreach ($_POST as $key) {
        htmlspecialchars($key);
    }

    $validator = new FieldValidator();
    $nameErro = $validator->checkName($_POST['clientName']);
    $packageErro = $validator->checkPackage($_POST['clientPackage']);
    $startErro = $validator->checkDate($_POST['clientStart']);
    $endErro = $validator->checkDate($_POST['clientEnd']);

    $nameAvailability = new NameAvailability();
    $nameErroSec = $nameAvailability->checkNameAvailability($_POST['clientName']);


    if ($nameErro == false && $packageErro == false && $startErro == false && $endErro == false && $nameErroSec == false) {
        $validationResult = true;
    }
    else{
        $validationResult = false;
    }
}

if (isset($validationResult)) {
 
    if ($validationResult == true) {
    
        $addClient = new AddNewUser();
        $addClient->addUser($_POST['clientName'], $_POST['clientPackage'], $_POST['clientStart'], $_POST['clientEnd']);
    }
}


$loader = new Twig_Loader_Filesystem('../views');
$twig = new Twig_Environment($loader);

echo $twig->render('addclient.html', array(

    'fieldsEmpty' => "some",
    'name_error' => @$nameErro,
    'package_erro' => @$packageErro,
    'start_erro' => @$startErro,
    'end_erro' => @$endErro,
    'name_ava_erro' => @$nameErroSec,
));

?>