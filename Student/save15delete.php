<?php 
session_start();

unset($_SESSION['click']);

header('Location: /task_15.php');
?>