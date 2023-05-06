<?php 
require_once __DIR__ . '/Connection/connection.php';

$conn = getConnection();

$users_into = <<<SQL
INSERT INTO users(name,email, password)
values
('Jose Amandio de Almeida','amandio.almeida@eto.tl','password','53guR03t0#@!');
SQL;


$conn->exec($users_into);
echo "Successfully Into Data";

$conn=null;