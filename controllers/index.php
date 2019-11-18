<?php
session_start();

require('../vendor/autoload.php');
require('../model/dbconnect.php');
require('../model/Users.php');
require('../model/ViewUser.php');


// if(isset($_GET['toast'])){
//     $toastStatus = $_GET['toast'];
//     if ($_GET['toaststatus'] == 'success') {
//         $deleteToast = 'success';
//         header("Refresh: 1; url=index.php");
//     }
//     else{
//         $deleteToast = 'failed';
//     }
// }

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
    'toastDeleteActive' => @$toastDeleteActive,
    'deleteToast' => @$deleteToast,
  
));


/*  TO DO
*   -------------------------------------------            
*   Form for Add the new clients - DONE
*   -------------------------------------------          
*   Serve pop up's when the client is deleting       
*   ------------------------------------------- 
*   The Client edition system.
*   -------------------------------------------
*
*/


?>