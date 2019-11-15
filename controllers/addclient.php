<?php
session_start();

require('../vendor/autoload.php');
require('../model/dbconnect.php');

if (isset($_POST['clientAddButton'])) {
    if (isset($_POST['clientName'])){
        // echo '<span style="margin-left: 300px;">' . $_POST['clientName']. '</span>';
    }
}



$loader = new Twig_Loader_Filesystem('../views');
$twig = new Twig_Environment($loader);

echo $twig->render('addclient.html', array(

    'fieldsEmpty' => "some",

));

?>