<?php


class ViewUser extends Users{

    public function showUsers(){

        return $clients = $this->getAllUsers();
        
    }
}