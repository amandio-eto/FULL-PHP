<?php 
require_once __DIR__ .'/Connection/connection.php';

$conn = getConnection();
$email=$conn->quote("amandio.almeida@eto.tl");
$password=$conn->quote("53guR03t0#@!");

$sql = "SELECT * FROM users WHERE email = $email AND password =$password;";
$stament_login = $conn->query($sql);

$login = null;
$find_user = null;
foreach($stament_login as $user) {
    
    $login=true;
    $find_user = $user['email'];
    
}
if($login==true){
    echo "Login successful $find_user";
}else{
    echo "Login failed";
}