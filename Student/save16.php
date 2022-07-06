<?php 

session_start();

$email = $_POST['email']; // С помощью метода пост передаём в переменную значение мейла из странички формы

$password = $_POST['password']; // С помощью метода пост передаём в переменную значение пароля из странички формы

$pdo = new PDO("mysql:host=localhost;dbname=users;", "root", "");

$sql = "SELECT * FROM accounts WHERE email=:email"; // Запрос скл на выбор каждого мейла из таблицы
$statement = $pdo->prepare($sql);
$statement->execute(['email' => $email]); // Говорим машине чтобы она переменную мейл передавала в строку email в таблице из базы данных
$user = $statement->fetch(PDO::FETCH_ASSOC);

if(empty($user)){
	$_SESSION['error'] = "Неверный логин или пароль";
	header('Location: /task_16.php');
	exit;
// Если существующий мейл есть, то прекращаем работу дальше
}

if(!password_verify($password, $user['password'])){
   $_SESSION['error'] = "Неверный логин или пароль";
  header('Location: /task_16.php');
  exit;
// Если пароль из формы неверный, то не даём доступ
}

$_SESSION['user'] = ['email' => $user['email'], "id" => $user['id']]; // Если всё хорошо, то в $_SESSION['user'] передаём значения из ввёденной наши формы чтобы в страничку success16.php использую цикл foreach записывать мейл пользователя об успешной авторизации

header('Location: /success16.php');
// В этом задании мы создали обработчик формы, который авторизует нас и проверяет нету ли уже существующего мейла в базе данных 
?>