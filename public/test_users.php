<?php

use TestUsers\public\TestUser;

include('User.php');

$user1 = new TestUser(1, 'Viktoria Sharifullina', 'viktoriasharifullina@gmail.com');
$user2 = new TestUser(2, 'Sonya Kostina', '');
$user3 = new TestUser(3, 'Elena BodnarchuK', '');
$user4 = new TestUser(4, 'Kirill Petrov', 'kirill_petrov@yandex.ru');

$users = [$user1, $user2, $user3, $user4];

$empty_email = "";

$users_with_email = array_filter($users, function ($user) use ($empty_email) {
    return $user->getEmail() != $empty_email;
});

$filename = 'users_with_email.txt';

$data = serialize($users_with_email);
file_put_contents($filename, $data);

echo '<pre>';

$file = file_get_contents($filename);
$value = unserialize($file);
print_r($value);

echo '</pre>';
