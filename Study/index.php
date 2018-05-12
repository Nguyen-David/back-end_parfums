<?php
//session_start();
?>
<!--  Загрузка файла(ФОТО)   -->
<?php
//if(isset($_FILES['image'])){
//    $errors = array();
//    $file_name = $_FILES['image']['name'];
//    $file_size = $_FILES['image']['size'];
//    $file_tmp = $_FILES['image']['tmp_name'];
//    $file_type = $_FILES['image']['type'];
//    $file_ext = strtolower(end(explode('.',$_FILES['image']['name'])));
//    $expensions = array("jpeg","jpg", "png");
//
//    if($file_size>2097152)
//    {
//        $errors[] = 'Файл должен бить 2мб';
//    }
//
//    if(empty($errors) == true){
//        move_uploaded_file($file_tmp,"images/".$file_name);
//        echo "success";
//    }else{
//        print "errrors";
//    }
//}
//?>

<!--    Нахождения слова в строках  -->
<?php
//if(preg_match("/\bweb\b/i" , "Php is the web sripting language")) {
//    echo "Success";
//}else{
//    echo "Вхождение не найдено";
//}
//
//?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>kjfhjf</h1>
<h1>hgfhg</h1>
<h1>hgh</h1>



<!--  Удаление данных DELETE  -->
<?php
//$servername= "localhost";
//$username = "root";
//$password ="";
//$dbname = "testDB";
//
//$conn = new mysqli($servername,$username,$password,$dbname);
//
//$sql = "DELETE FROM users WHERE name='Edik'";
//
//if($conn->query($sql)===TRUE){
//    echo"Record created";
//}
//
//$conn->close();

// TRUNCATE - удаление всех записей
//$servername= "localhost";
//$username = "root";
//$password ="";
//$dbname = "testDB";
//
//$conn = new mysqli($servername,$username,$password,$dbname);
//
//$sql = "TRUNCATE TABLE users";
//
//if($conn->query($sql)===TRUE){
//    echo"Record created";
//}
//
//$conn->close();

?>

<!--  Обновление данных UPDATE и REPLACE  -->
<?php
//$servername= "localhost";
//$username = "root";
//$password ="";
//$dbname = "testDB";
//
//$conn = new mysqli($servername,$username,$password,$dbname);
//
//$sql = "UPDATE users SET name='Sanya' WHERE name='Kolya'";
//
//if($conn->query($sql)===TRUE){
//    echo"Record created";
//}
//$conn->close();

//             Replace

//$servername= "localhost";
//$username = "root";
//$password ="";
//$dbname = "testDB";
//
//$conn = new mysqli($servername,$username,$password,$dbname);
//
//$sql = "REPLACE INTO users VALUES
//        (12, 'Roma','Petrovich','145523'),
//        (10,'Edik','Povorev','97493')";
//
//if($conn->query($sql)===TRUE){
//    echo"Record created";
//}
//$conn->close();


?>

<!--  Выборка данных Select  -->
<?php

//$servername= "localhost";
//$username = "root";
//$password ="";
//$dbname = "testDB";
//
//$conn = new mysqli($servername,$username,$password,$dbname);
//
//$sql = "SELECT * FROM users";
//$result = $conn->query($sql);
//if($result->num_rows > 0){
//    while ($row = $result->fetch_assoc()){
//        echo "</br>id:". $row["Id_name"]."</br> name:". $row["name"]."</br>surname:". $row["surname"];
//    }
//}

//$conn->close();
?>

<!--  Добавление нескольких записей в таблицу  -->
<?php
//$servername= "localhost";
//$username = "root";
//$password ="";
//$dbname = "testDB";
//
//$conn = new mysqli($servername,$username,$password,$dbname);
//
//$sql = "INSERT INTO users(name, surname, password)
//  VALUE('Ivan','Ivanov','123456');";
//$sql .= "INSERT INTO users(name, surname, password)
//  VALUE('Ivan4353','Ivanov325','12345686');";
//$sql .= "INSERT INTO users(name, surname, password)
//  VALUE('Ivan000','Ivanov00','1234560000');";
//
//if($conn->multi_query($sql)===TRUE){
//    echo"Record created";
//}
//$conn->close();

// PDO способ
//$servername= "localhost";
//$username = "root";
//$password ="";
//$dbname = "testDB";
//try {
//    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//
//    $conn->beginTransaction();
//    $conn->exec("INSERT INTO users(name, surname, password)
//  VALUE('Jolp','Romaamo','123456')");
//    $conn->exec("INSERT INTO users(name, surname, password)
//  VALUE('Jolp435','Romaamo35235','1234565235')");
//    $conn->exec("INSERT INTO users(name, surname, password)
//  VALUE('Jolp00','Romaamo00','123456000')");
//    $conn->commit();
//    echo "Record created";
//}
//catch (PDOException $e){
//    $conn->rollBack();
//}
//$conn = null;

?>

<!-- Получение id позьзователя-->
<?php
//$servername= "localhost";
//$username = "root";
//$password ="";
//$dbname = "testDB";
//
//$conn = new mysqli($servername,$username,$password,$dbname);
//
//$sql = "INSERT INTO users(name, surname, password)
//  VALUE('Ivan','Ivanov','123456')";
//
//if($conn->query($sql)===TRUE){
//    $last_id = $conn->insert_id;
//    echo"Last id". $last_id;
//}
//$conn->close();

// PDO способ
//$servername= "localhost";
//$username = "root";
//$password ="";
//$dbname = "testDB";
//try {
//    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//
//    $sql = "INSERT INTO users(name, surname, password)
//  VALUE('Jolp','Romaamo','123456')";
//    $conn->exec($sql);
//    $last_id = $conn->lastInsertId();
//    echo "Last id:" . $last_id;
//}
//catch (PDOException $e){
//    echo $sql . $e->getMessage();
//}
//
//$conn = null;
//?>

<!-- Добавление данных в таблицу -->
<?php
//$servername= "localhost";
//$username = "root";
//$password ="";
//$dbname = "testDB";
//
//$conn = new mysqli($servername,$username,$password,$dbname);
//
//$sql = "INSERT INTO users(name, surname, password)
//  VALUE('Ivan','Ivanov','123456')";
//
//if($conn->query($sql)===TRUE){
//    echo"Record created";
//}
//$conn->close();

// PDO способ
//$servername= "localhost";
//$username = "root";
//$password ="";
//$dbname = "testDB";
//try {
//    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//
//    $sql = "INSERT INTO users(name, surname, password)
//  VALUE('Jolp','Romaamo','123456')";
//    $conn->exec($sql);
//    echo "Record created";
//}
//catch (PDOException $e){
//    echo $sql. $e->getMessage();
//}
//$conn = null;

?>

<!-- Создание таблицы в БД -->
<?php
//$servername= "localhost";
//$username = "root";
//$password ="";
//$dbname = "testDB";
//
//$conn = new mysqli($servername,$username,$password,$dbname);
//
//if($conn->connect_error)
//{
//    die("Connection failed: {$conn->connect_error}");
//}
//
//$sql = "CREATE TABLE users(
//    name VARCHAR(30) NOT NULL,
//    surname VARCHAR(30) NOT NULL PRIMARY KEY,
//    password VARCHAR(30) Not NULL)";
//
//if($conn->query($sql)===TRUE){
//    echo "Table users created successfully";
//}else{
//    echo "Error".$conn->error;
//}
//
//$conn->close();

// PDO способ
//$servername= "localhost";
//$username = "root";
//$password ="";
//$dbname = "testDB";
//
//try{
//    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
//    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//    $sql = "CREATE TABLE users2(
//    name VARCHAR(30) NOT NULL,
//    surname VARCHAR(30) NOT NULL PRIMARY KEY,
//    password VARCHAR(30) Not NULL)";
//
//    $conn->exec($sql);
//}
//catch (PDOException $e){
//    echo $sql . $e->getMessage();
//}
//$conn = null;
//?>

<!-- Создание БД -->
<?php
//$servername= "localhost";
//$username = "root";
//$password ="";
//
//$conn = new mysqli($servername,$username,$password);
//
//if($conn->connect_error)
//{
//    die("Connection failed: {$conn->connect_error}");
//}
// $sql = "CREATE DATABASE testDB";
//
//if($conn->query($sql)===TRUE){
//    echo "Database succesfull created";
//}else{
//    echo "Error". $conn->error;
//}

// PDO способ
//$servername= "localhost";
//$username = "root";
//$password ="";
//
//try{
//    $conn = new PDO("mysql:host=$servername;dbname=testDB",$username,$password);
//    $sql = "CREATE DATABASE testDB2";
//    $conn->exec($sql);
//    echo "Database succesfull created";
//
//}
//catch (PDOException $e){
//    echo $sql.$e->getMessage();
//}
//

?>

<!-- начало Mysql -->
<?php
//Подход ООП
//$servername= "localhost";
//$username = "rootttt";
//$password ="";
//
//$conn = new mysqli($servername,$username,$password);
//
//if($conn->connect_error)
//{
//    die("Connection failed: {$conn->connect_error}");
//}
//echo "Connection Sucssecful";

//Процедурный способ
//$servername= "localhost";
//$username = "root";
//$password ="";
//
//$conn = mysqli_connect($servername,$username,$password);
//
//if(!$conn)
//{
//    die("Connection failed:". mysqli_connect_error());
//}
//echo "Connection Sucssecful";

// PDO способ
//$servername= "localhost";
//$username = "root";
//$password ="";
//
//try{
//    $conn = new PDO("mysql:=$servername; dbname=newDB", $username,$password);
//    echo "Connection Sucssecful";
//}
//catch (PDOException $e)
//{
//    echo "Connection failed:". $e->getMessage();
//}


?>

<!--  Get and Set -->
<?php
//class GetSet{
//    private $number = 1;
//
//    public function __get($name)
//    {
//        echo "You get {$name}";
//    }
//    public function __set($name,$val)
//    {
//        echo "You set {$name} to ";
//    }
//}
//$obj = new GetSet();
//echo $obj->number;
//echo $obj->number=678;
?>

<!--  Клонирование -->
<?php
//class User {
//    private $name;
//    private $city;
//    private $id;
//
//    function __construct($name,$city)
//    {
//        $this->name = $name;
//        $this->city = $city;
//    }
//    function getId($id) {
//        $this->id =$id;
//    }
//
//    function __clone()
//    {
//        $this->id = 0;
//    }
//}
//
//$obj = new User("Valera","Kiev");
//$obj->getId(4893);
//$obj2 = clone $obj;
//var_dump($obj2);
?>

<!--  Трейты  -->
<?php
//trait Hello {
//    public function sayHello(){
//        echo "Hello ";
//    }
//}
//
//trait World {
//    public function sayWorld(){
//        echo "World";
//    }
//}
//class MyHelloWorld {
//    use Hello,World;
//}
//$user1 = new MyHelloWorld();
//$user1->sayHello();
//$user1->sayWorld();
?>

<!--  Интерфейсы  -->
<?php
//interface First{
//    public function getName();
//}
//interface Second {
//    public function getStatus();
//}
//
//class Test implements First, Second {
//    public $name = "Alex";
//    public $status = "Admin";
//    public function getName()
//    {
//        echo $this->name;
//    }
//    public function getStatus()
//    {
//        echo $this->status;
//    }
//}
//
//$user1 = new Test();
//$user1->getName();
//$user1->getStatus();
//?>

<!--  Абстрактный класс  -->
<?php
//abstract class user {
//    public $name;
//    public $status;
//
//    abstract public function getStatus();
//}
//
//class Admin extends user {
//    public function getStatus(){
//        echo "Admin";
//    }
//}
//
//$user1 = new Admin;
//$user1->getStatus();
?>

<!--  Константы класса/свойства -->
<?php
//    class user {
//        const SOME_CONST = 3.14;
//    }
//    echo user::SOME_CONST;
//?>

<!--  Статическиие свойства и методы  -->
<?php
//class user {
//    public static $name;
//
//    public static function hello(){
//        echo "Hello ";
//        return self::$name;
//    }
//}
//
//user::$name = "Ivan";
//echo user::hello();
//
?>

<!--  ООП наследование   -->
<?php
//class User {
//    function __construct($name,$password,$email,$city) {
//        $this->name = $name;
//        $this->password = $password;
//        $this->email = $email;
//        $this->city = $city;
//    }
//
//    function getInfo(){
//        $information = "Name:{$this->name}</br>"."Password:{$this->password}</br>"."E-mail:{$this->email}</br>"."City:{$this->city}</br>";
//        return $information;
//    }
//}
//
//
//
//class Admin extends User {
//    public $info;
//    public $rights;
//    function __construct($name, $password, $email, $city, $info, $rights)
//    {
//        parent::__construct($name, $password, $email, $city);
//        $this->info = $info;
//        $this->rights = $rights;
//    }
//    function getInfo()
//    {
//        $information = parent::getInfo();
//        $information .= "{$this->info}"."{$this->rights}";
//        return $information;
//    }
//}
//$moder = new Admin("Pasha","123456","pasha@gmail.com","Kiev","Moderator", "admin" );
//echo $moder->getInfo();
//?>

<!--  Деструктор   -->
<?php
//class DestructableClass{
//    function __construct(){
//        print "Конструктор";
//        $this->name = "DestructableClass";
//    }
//
//    function __destruct(){
//        print "Уничтожение". $this->name;
//    }
//}
//$obj = new DestructableClass;
?>

<!--  Конструктор   -->
<?php
//class User {
//    function __construct($name,$password,$email,$city) {
//        $this->name = $name;
//        $this->password = $password;
//        $this->email = $email;
//        $this->city = $city;
//    }
//
//    function getInfo(){
//        return "Name:{$this->name}</br>"."Password:{$this->password}</br>"."E-mail:{$this->email}</br>"."City:{$this->city}</br>";
//    }
//}
//
//$admin = new User("Ivan","123456","ivan@gmail.com","Kovel");
//echo $admin->getInfo();
?>

<!--  Методы ООП   -->
<?php
//class User {
//    public $name = "Имя";
//    public $password = "Пароль";
//    public $email = "Емейл";
//    public $city = "Город";
//
//    function getInfo(){
//        return "{$this->name}". "{$this->surname}";
//    }
//}
//$admin = new User();
//$admin->name ="Alexei";
//$admin->surname ="Potapov";
//echo "Пользователь: {$admin -> getInfo()}";
?>

<!--  ООП область видимости   -->
<?php
//class User {
//    public $name = "Имя";
//    public $password = "Пароль";
//    public $email = "Емейл";
//    public $city = "Город";
//}
//
//$admin = new User();
//$user1 = new User();
//
//$admin->name = "Alexei";
//$user1->name = "Pasha";
//$admin->surname = "Potapenko";
//echo $admin->name," ";
//echo $admin->surname , "</br>";
//echo $user1->name;
//
//?>

<!--  Загрузка файла(ФОТО)   -->
<!--<form action="" method="post" enctype="multipart/form-data">-->
<!--    <input type="file" name="image">-->
<!--    <input type="submit">-->
<!--</form>-->
<!---->
<!--<ul>-->
<!--    <li>File name:--><?php //echo $file_name?><!--</li>-->
<!--    <li>File size:--><?php //echo $file_size?><!--</li>-->
<!--    <li>File type:--><?php //echo $file_type?><!--</li>-->
<!--</ul>-->

<!--    Работа с файлами   -->
<?php
//$lorem = fopen("Some.txt","r")or die("Не удалось");
////echo fread($lorem,filesize("Some.txt"));
////fclose($lorem);
////echo fgets($lorem, 10);
//
//$hello = fopen("world.txt","w");
//$txt = "jfhkghdf hdfhgdfhnm hdfhghjdf djfjhghbg";
//fwrite($hello,$txt);
//fclose($hello);
?>
<!--      Дата и время    -->
<?php
//echo date("I ds FY h:i:s A");
//echo date("Today d.m.y")
//$nextWeek = time() +(7*24*60*60);
//echo "Now".date("Y-m-d")."\n";
//echo "Now".date("Y-m-d", $nextWeek)."\n";

//setlocale(LC_ALL,"");
//echo strftime("%B %Y года,%d число.%A, %H:%M");

//$time = strtotime("-1 day");
//$yest = date("Y-m-d", $time);
//echo $yest;

?>
<!--       Сессии      -->
<?php
//$_SESSION["favcolor"]="red";
//$_SESSION["favpage"]="home";
//
//echo $_SESSION["favcolor"]="red";
//echo $_SESSION["favpage"]="home";
//?>
<!--       Ключи php      -->
<?php
////    $birth =[
////        "Ivan" => "1920-11-02",
////        "Roma" => "1925-01-04",
////        "Kolya"=> "1920-30-17"
////    ];
////
////    foreach($birth as $k => $v)
////    {
////        echo "$k родился $v </br>";
////    }
////    ?>



</body>
</html>