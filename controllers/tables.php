<?php
session_start();
require('../model/dbconnect.php');
require_once('../model/deleteuser.php');

// if (isset($_POST['deleteBtn'])) {

//     if (isset($_POST['clientId'])) {
//         $clientId = $_POST['clientId'];
        
//         $db = new Deleteuser();
//         $db->deleteClient($clientId);

//         $_SESSION['toastDelete'] = "yes";
//         $_SESSION['toastDeleteStatus'] = "success";
//         header("Location: index.php");
//         exit();
//     }
// }





    $clientId = $_POST['id'];
    
    $db = new Deleteuser();
    $db->deleteClient($clientId);

    $_SESSION['toastDelete'] = "yes";
    $_SESSION['toastDeleteStatus'] = "success";
    header("Location: index.php");
    exit();





