<?php
use PlatziPHP\Author;

require_once 'vendor\autoload.php';

$user = new Author('fake.email@foo.dev', '1234');

$user->setName('Daniel', 'Cueto');

echo $user->getFirstName(); echo PHP_EOL;
echo $user->getLastName();
echo PHP_EOL;


//var_dump($user);

