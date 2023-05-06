<?php 
require_once __DIR__.'/Connection/connection.php';
$conn = getConnection();
$users = <<<SQL
create table users
(
    id int auto_increment primary key,
    name varchar(255) not null,
    email varchar(255) not null,
    password varchar(255) not null   
)
SQL;
$execute = $conn->query($users);
echo "Successfully created";