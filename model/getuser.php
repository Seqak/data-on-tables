<?php

class GetUser extends DBconnect{

    public function getOneUser($id){

        $sql = ("SELECT * FROM clients WHERE id='$id'");
        $result = $this->connect()->query($sql);
        $fetchResult = $result->fetch_assoc();

        return $fetchResult;

    }

    public function checkUser($id){
        $sql = ("SELECT * FROM clients WHERE id='$id'");
        $result = $this->connect()->query($sql);
        $fetchResult = $result->num_rows;

        return $fetchResult;
    }

}

?>