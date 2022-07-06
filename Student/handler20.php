<?php
 $count = count($_FILES['image']['name']); // Подсчитываем сколько элементов в массиве

    for ($i=0; $i < $count; $i ++){ // Создали цикл

  $filename = upload_file($_FILES['image']['name'][$i], $_FILES['image']['tmp_name'][$i]); // В переменную $filename мы передали функцию upload_file 

  $pdo = new PDO("mysql:host=localhost;dbname=users;", "root", "");
  $sql = "INSERT INTO images (image) VALUES (:image)";
  $statement = $pdo->prepare($sql);
  $statement->execute(['image' => $filename]);
  // Соединились с базой данных и сделали запрос на добавления данных в строку image
}





function upload_file($filename, $tmp_name){
  $result = pathinfo($filename); // в переменную передали pathinfo которая будет урезать выбранный файл

  $filename = uniqid() . "." .$result['extension']; // Теперь из выбранного файла останется только расширение и к нему будет добавлятся уникальное название

  move_uploaded_file($tmp_name, 'uploads/' . $filename); // Выбранному файлу дали путь, куда он должен скачаться

  return $filename; // Вернули значение $filename 
  
}



    header("Location: /task_18.php"); // После операции возвращаемся в страничку формы



?>



?>
