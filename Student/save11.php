<?php 

$text = $_POST['text'];

$pdo = new PDO("mysql:host=localhost; dbname=users;", "root", "");
$sql = "INSERT INTO my_table (text) VALUES (:text)";
$statement = $pdo->prepare($sql);
$statement->execute(['text' => $text]);

header('Location: /task_11.php');
// Соединившись  с базой данных и используя запрос sql на добавление строки, используя форму, мы добавляли новую строку в базу данных
?>