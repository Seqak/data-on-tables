<?php

class Deleteuser extends DBconnect{

    public function deleteTypa($id){

        $sql = ("DELETE FROM clients WHERE id='$id' ");
        $result = $this->connect()->query($sql);
        echo "Usunięto Typa!";

    }
}
