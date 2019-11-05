<?php


session_start();
require('../vendor/autoload.php');
include('../config.php');



$config = new DBConfig\DBConfig();

$dbConf = $config->getConfig();
$dbConfig = $dbConf->fetch_assoc();

// $db = new mysqli('localhost', 'root', 'vertrigo', 'data_on_tables');
$db = new mysqli($dbConfig);
$dbQuery = $db->query("SELECT * FROM clients");
$dbResult = $dbQuery->fetch_assoc();

foreach ($dbResult as $value) {
    printf($value);
} 












$loader = new Twig_Loader_Filesystem('../views');
$twig = new Twig_Environment($loader);

echo $twig->render('index.html', array(
    'alert' => 'Błąd walidacji danych',
    'age' => 3,
    
));

?>