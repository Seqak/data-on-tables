<?php
session_start();

require('../vendor/autoload.php');
require('../model/dbconnect.php');
require('../model/Users.php');
require('../model/ViewUser.php');

// echo $_POST['data'];



if (isset($_POST['dilit'])) {
    # code...

    if (isset($_POST['lola'])) {
        $hope = $_POST['lola'];
        // echo $hope;

        $db = new mysqli('localhost', 'root', 'vertrigo', "data_on_tables");
        $db->query("DELETE FROM clients WHERE id='$hope'");
        // echo "Usunięto Typa!";
    }
}














































$users = new ViewUser();
$arr = $users->showUsers();


$loader = new Twig_Loader_Filesystem('../views');
$twig = new Twig_Environment($loader);

echo $twig->render('index.html', array(

    'factory' => $arr,
    // 'elo' => $varr,
  
));



?>