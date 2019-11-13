<?php
session_start();
require('../model/dbconnect.php');
require('../model/Users.php');
require_once('../model/deleteuser.php');

if (isset($_POST['deleteBtn'])) {
    # code...

    if (isset($_POST['clientId'])) {
        $clientId = $_POST['clientId'];
        
        $db = new Deleteuser();
        $db->deleteClient($clientId);

        // header("Location: index.php?toast=yes&toaststatus=success");
        $_SESSION['toast'] = "yes";
        $_SESSION['toastStatus'] = "success";
        header("Location: index.php");
        exit();
    }
}



