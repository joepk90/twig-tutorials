<?php

require_once '../vendor/autoload.php';;

$loader = new \Twig\Loader\FilesystemLoader('../templates');
$twig = new \Twig\Environment($loader);

echo $twig->render('index.html', array(
    'title' => 'Twig Turoial 01',
    'crew' => array(
        array(
            'name' => 'Ellen Ripley',
            'role' => 'Warrent Officer',
            'status' => 'Alive',
        ),
        array(
            'name' => 'Ash',
            'role' => 'Science Officer',
            'status' => 'Dead',
        ),
        array(
            'name' => 'Parker',
            'role' => 'Cheif Engineer',
            'status' => 'Alive',
        ),
    )
));
