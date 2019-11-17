<?php

class AddNewUser extends DBconnect {

    public function addUser($valName, $valPackage, $valStart, $valEnd){

        $sql = ("INSERT INTO clients VALUES (NULL, '$valName', '$valPackage', '$valStart', '$valEnd')");
        $result = $this->connect()->query($sql);
        
        header('Location: index.php');
    }
    
}

?>