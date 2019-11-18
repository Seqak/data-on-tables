<?php

class AddNewUser extends DBconnect {

    public function addUser($valName, $valPackage, $valStart, $valEnd){

        $sql = ("INSERT INTO clients VALUES (NULL, '$valName', '$valPackage', '$valStart', '$valEnd')");
        $result = $this->connect()->query($sql);

        $_SESSION['toastAdded'] = "yes";
        $_SESSION['toastAddedStatus'] = "success";
        header('Location: index.php');
    }
    
}

?>