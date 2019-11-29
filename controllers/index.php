<?php
session_start();

require('../vendor/autoload.php');
require('../model/dbconnect.php');
require('../model/Users.php');
require('../model/ViewUser.php');

$toastAddedActive = false;
if (isset($_SESSION['toastAdded'])) {

    $toastAddedActive = true;
    if (isset($_SESSION['toastAddedStatus'])) {
        if ($_SESSION['toastAddedStatus'] == 'success') {
            
            $addedToast = 'success';
            unset($_SESSION['toastAdded']);
        }
        else{
            $addedToast = 'failed'; 
            unset($_SESSION['toastAdded']);   
        }
    }
}

$toastEditActive = false;
if (isset($_SESSION['toastEdit'])) {

    $toastEditActive = true;
    if (isset($_SESSION['toastEditStatus'])) {
        if ($_SESSION['toastEditStatus'] == 'success') {
            
            $editToast = 'success';
            unset($_SESSION['toastEdit']);
        }
        else{
            $editToast = 'failed'; 
            unset($_SESSION['toastEdit']);   
        }
    }
}


$toastDeleteActive = false;
if (isset($_SESSION['toastDelete'])) {

    $toastDeleteActive = true;
    if (isset($_SESSION['toastDeleteStatus'])) {
        if ($_SESSION['toastDeleteStatus'] == 'success') {
            
            $deleteToast = 'success';
            unset($_SESSION['toastDelete']);
        }
        else{
            $deleteToast = 'failed'; 
            unset($_SESSION['toastDelete']);   
        }
    }
}


$users = new ViewUser();
$arr = $users->showUsers();


$loader = new Twig_Loader_Filesystem('../views');
$twig = new Twig_Environment($loader);

echo $twig->render('index.html', array(

    'clientList' => $arr,
    'toastAddedActive' => @$toastAddedActive,
    'addedToast' => @$addedToast,
    'toastEditActive' => @$toastEditActive,
    'editToast' => @$editToast,
    'toastDeleteActive' => @$toastDeleteActive,
    'deleteToast' => @$deleteToast,
  
));

?>