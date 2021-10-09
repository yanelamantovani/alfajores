<?php

$config = array(
    'host' => 'localhost:3306',
    'dbname' => 'alfajores',
    'username' => 'root',
    'password' => 'root'
);

return new PDO('mysql:host='.$config['host'].';dbname='.$config['dbname'].';charset=utf8',$config['username'],$config['password']); 