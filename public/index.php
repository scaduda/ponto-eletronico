<?php

require_once(dirname(__FILE__, 2) . '/src/config/config.php');
require_once(dirname(__FILE__, 2) . '/src/models/User.php');

$user = new User(['name' => 'samira', 'email'=> 'scaduda@gmail.com']);
print_r($user);
echo('fim');
