<?php

require('../vendor/autoload.php');

$loader = new Twig_Loader_Filesystem('../views');
$twig = new Twig_Environment($loader);

$title = 'Cycki Marioli';
$title2 = 'Muffinki~~';

echo $twig->render('index.html', array(
    'alert' => 'Błąd walidacji danych',
    'age' => 3,
    'title' => $title,
    'title2' => $title2,
    
));


?>