<?php

class Users extends DBconnect{
    
    protected function getAllUsers(){
    
        $sql = "SELECT * FROM clients";
        $result = $this->connect()->query($sql);
        $numRows = $result->num_rows;
        if ($numRows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }

    }
}