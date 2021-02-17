<?php

require_once '../vendor/autoload.php';;

$loader = new \Twig\Loader\FilesystemLoader('../templates');
$twig = new \Twig\Environment($loader);

echo $twig->render('crew.html', array(
    'title' => 'Twig Turoial 01',
    'sub-title' => 'Documentation on using Twig template data',
    'crew' => array(
        array(
            'name' => 'Ellen Ripley',
            'reg-number' => '018345',
            'role' => 'Warrent Officer',
            'status' => 'Alive',
        ),
        array(
            'name' => 'Ash',
            'reg-number' => '018345',
            'role' => 'Science Officer',
            'status' => 'Dead',
        ),
        array(
            'name' => 'Parker',
            'reg-number' => '018345',
            'role' => 'Cheif Engineer',
            'status' => 'Alive',
        ),
    )
));
