<?php

class NameAvailability extends DBconnect{

    public function checkNameAvailability($arg){
        $sql = ("SELECT * FROM clients WHERE name='$arg'");
        $exec = $this->connect()->query($sql);
        $result = $exec->num_rows;

        if ($result > 0) {
            return true;
        }
        else{
            return false;
        }
    }
}

?>