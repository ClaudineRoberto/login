<?php

$user = $_POST['user'];
$password = $_POST['password'];

if ($password == 123 && $user == 'Claudine'){
    header("Location: panel.php");
} else {
    header("Location: wrong-user.php");
}

?>