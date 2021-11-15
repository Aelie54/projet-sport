<?php

$users = [
    [
        'full_name' => 'Amélie',
        'email' => 'klein.amelie1991@gmail.com',
        'password' => 'Kaki1991',
    ],
    
        [
        'full_name' => 'Benjamin',
        'email' => 'bernard.benjamin54@gmail.com',
        'password' => '123Soleil',
    ],

];


if(isset($_GET['limit']) && is_numeric($_GET['limit'])) {
    $limit = (int) $_GET['limit'];
} else {
    $limit = 100;
}