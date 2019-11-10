<?php


class ViewUser extends Users{

    public function showUsers(){

        return $datas = $this->getAllUsers();
        // foreach ($datas as $data) {
        //     echo $data['name'] . "<br>";
        //     echo $data['package'] . "<br>";
        //     echo $data['start'] . "<br>";
        //     echo $data['end'] . "<br><br>";
        // }
    }
}