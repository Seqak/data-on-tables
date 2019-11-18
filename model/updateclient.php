<?php

class UpdateClient extends DBconnect{

    public function updateUser($valId, $valName, $valPackage, $valStart, $valEnd){

        $dateStart = explode('.', $valStart);
        $finalyStartDate = $dateStart[2] . "." . $dateStart[1] . "." . $dateStart[0];

        $dateEnd = explode('.', $valEnd);
        $finalyEndDate = $dateEnd[2] . "." . $dateEnd[1] . "." . $dateEnd[0];
        

        $sql = ("UPDATE clients SET name='$valName', package='$valPackage', start='$finalyStartDate', end='$finalyEndDate' WHERE id='$valId'");
        
        $result = $this->connect()->query($sql);

        $_SESSION['toastEdit'] = "yes";
        $_SESSION['toastEditStatus'] = "success";
        header('Location: index.php');

    }
}



?>
