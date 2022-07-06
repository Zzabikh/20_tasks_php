<?php 
session_start();

$message = $_POST['text']; // В переменную $message мы передавали текст из странички формы используя метод $_POST

$_SESSION['text']= $message; // 

header('Location: /task_14.php');

// В этом задании мы выводили строку которую передавали через форму

?>