<?php

class Deleteuser extends DBconnect{

    public function deleteClient($id){

        $sql = ("DELETE FROM clients WHERE id='$id' ");
        $result = $this->connect()->query($sql);
    }
}
