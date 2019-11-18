<?php

class AddNewUser extends DBconnect {

    public function addUser($valName, $valPackage, $valStart, $valEnd){

        $dateStart = explode('.', $valStart);
        $finalyStartDate = $dateStart[2] . "." . $dateStart[1] . "." . $dateStart[0];

        $dateEnd = explode('.', $valEnd);
        $finalyEndDate = $dateEnd[2] . "." . $dateEnd[1] . "." . $dateEnd[0];
        

        $sql = ("INSERT INTO clients VALUES (NULL, '$valName', '$valPackage', '$finalyStartDate', '$finalyEndDate')");
        
        $result = $this->connect()->query($sql);

        $_SESSION['toastAdded'] = "yes";
        $_SESSION['toastAddedStatus'] = "success";
        header('Location: index.php');
    }
}

?>