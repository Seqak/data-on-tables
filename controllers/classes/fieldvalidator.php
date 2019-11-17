<?php

class FieldValidator{

    public function checkName($arg){
        if (empty($arg)) {
            return true;
        }
        else{
            return false;
        }

    }

    public function checkPackage($arg){
        if ($arg == 'start' || $arg == 'standard' || $arg == 'extensive' || $arg == 'nolimit') {
            return false;
        }else{
            return true;
        }
    }

    public function checkDate($arg){
      
        $dateArr = explode('.', $arg);

        if (!empty($arg)) {
            if (checkdate($dateArr[1], $dateArr[0], $dateArr[2]) == true) {
                return false;
            }
            else{
                return true;
            }
        }
        else{
            return true;
        }
    }

}


?>