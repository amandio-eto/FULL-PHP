<?php 


function getConnection() 
{
    $host = "localhost";
    $username = "root";
    $password = "";
    $port = 3306;
    $db= "db_php_mysql";
    return new PDO("mysql:host=$host:$port;dbname=$db", $username, $password);
    
}