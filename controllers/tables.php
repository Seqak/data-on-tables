<?php
session_start();
require('../model/dbconnect.php');
require('../model/Users.php');
require_once('../model/deleteuser.php');

if (isset($_POST['dilit'])) {
    # code...

    if (isset($_POST['lola'])) {
        $hope = $_POST['lola'];
        
        $db = new Deleteuser();
        $db->deleteTypa($hope);
    }
}

header("Location: index.php?e=lola&hope=$hope");

