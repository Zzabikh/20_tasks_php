<?php 
session_start();

unset($_SESSION['user']);

header('Location: /success16.php');

?>