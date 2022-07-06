<?php

if(isset($_GET['id'])) {

    $id = $_GET['id'];

    $pdo = new PDO("mysql:host=localhost;dbname=users;","root","");
    $sql = "DELETE FROM images WHERE id = :id"; //не пишем DELETE * FROM, просто DELETE FROM
    $statement =  $pdo->prepare($sql);
    $statement->execute(['id'=>$id]);

    header("Location: task_19.php");
// В этом задании мы создали запрос sql на удаление существубщего изображение как в страничке формы так и в базе данных
}
