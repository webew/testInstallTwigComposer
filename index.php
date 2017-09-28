<?php

include 'twig.php';

$page = 'index';
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

echo $twig->render($page . '.html.twig', array(
    'moteurs' => array(
        'twig' => array('name' => 'Twig', 'version' => '2.0'),
        'handleBars' => array('name' => 'Handle Bars', 'version' => '1.2')
    )
));
