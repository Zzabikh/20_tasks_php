<?php 
//echo '<pre>';
//var_dump($_FILES);
//echo '<pre/>';

//Сперва файл с формы загружается во временное хранилище на сервере.
//Следовательно следующим шагом нужно переместить файл оттуда в рабочую папку при помощи функции move_uploaded_file()
//move_uploaded_file($_FILES['name']['tmp_name'],'/images/'. $_FILES['image']);

//pathinfo() - Возвращает информацию о пути к файлу. Массив
//  ["dirname"]=>
//  string(1) "."
//  ["basename"]=>
//  string(36) "2f6c04ef2fb2ff6ee72c1a31cf0d9a64.jpg"
//  ["extension"]=>
//  string(3) "jpg"
//  ["filename"]=>
//  string(32) "2f6c04ef2fb2ff6ee72c1a31cf0d9a64"

//vardump($_FILES['image']);
//array(1) {
//  ["image"]=>
//  array(5) {
//    ["name"]=>
//    string(36) "2f6c04ef2fb2ff6ee72c1a31cf0d9a64.jpg"
//    ["type"]=>
//    string(10) "image/jpeg"
//    ["tmp_name"]=>
//    string(42) "C:\OSPanel\userdata\php_upload\php48A5.tmp"
//    ["error"]=>
//    int(0)
//    ["size"]=>
//    int(46803)
//  }
//}
 
// count подсчитывает сколько элементов в массиве
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