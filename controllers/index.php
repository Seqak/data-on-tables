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

$toastActive = false;
if (isset($_SESSION['toast'])) {

    $toastActive = true;
    if (isset($_SESSION['toastStatus'])) {
        if ($_SESSION['toastStatus'] == 'success') {
            
            $deleteToast = 'success';
            unset($_SESSION['toast']);
        }
        else{
            $deleteToast = 'failed'; 
            unset($_SESSION['toast']);   
        }
    }
}


$users = new ViewUser();
$arr = $users->showUsers();

$loader = new Twig_Loader_Filesystem('../views');
$twig = new Twig_Environment($loader);

echo $twig->render('index.html', array(

    'clientList' => $arr,
    'toastActive' => @$toastActive,
    'deleteToast' => @$deleteToast,
  
));


/*  TO DO
*   -------------------------------------------            
*   Form for Add the new clients 
*   -------------------------------------------          
*   Serve pop up's when the client is deleting       
*   ------------------------------------------- 
*
*/


?>