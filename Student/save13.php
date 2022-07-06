<?php 

session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$pdo = new PDO("mysql:host=localhost; dbname=users;", "root", "");

$sql = "SELECT * FROM task_13 WHERE email=:email"; 
$statement = $pdo->prepare($sql);
$statement->execute(['email' => $email]);
$user = $statement->fetch(PDO::FETCH_ASSOC);

// проверяем есть ли таковой мейл
 
if(!empty($user)){
	$_SESSION['error'] = "Пользователь уже зарегестрирован";
	header('Location: /task_13.php');
    exit;
// Уведомляем что есть
}



$hashed_password = password_hash($password, PASSWORD_DEFAULT); // В переменную передали хэшированный пароль 

$sql = "INSERT INTO task_13 (email, password) VALUES (:email, :password)"; // Запрос на добавление строки
$statement = $pdo->prepare($sql);
$statement->execute(['email'=>$email, 'password'=>$hashed_password]); // В элементы из таблицы в базе данных передаём значения из нужных нам переменных 

$message = "Вы успешно зарегестрированы";
$_SESSION ['success'] = $message;

header('Location: /task_13.php');
// Здесь мы создали sql запрос на добавление в базу данных мейла с паролем и при присутствии уже существующего, отменяли сам заропс уведомив пользлователя

?>