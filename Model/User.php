<?php
/**
 * Created by PhpStorm.
 * User: Lenovo Z570
 * Date: 04.05.2018
 * Time: 14:55
 */

class User
{
    public static function register($name,$number,$email,$password){
        $db = Db::getConnection();

        $sql = 'INSERT INTO user (name,number,email,password) '
            . ' VALUES (:name,:number,:email,:password)';

        $result = $db->prepare($sql);
        $result->bindParam(':name',$name,PDO::PARAM_STR);
        $result->bindParam(':number',$number,PDO::PARAM_INT);
        $result->bindParam(':email',$email,PDO::PARAM_STR);
        $result->bindParam(':password',$password,PDO::PARAM_STR);

        return $result->execute();
    }

    //Проверяем имя на наличие более 2-х символов
    public static function checkName ($name)
    {
        if(strlen($name) > 2){
            return true;
        }
        return false;
    }

    // Проверяем номе на наличие более 8 символов
    public static function checkNumber($number)
    {
        if(strlen($number) > 8){
            return true;
        }
        return false;
    }

    // Проверяем пароль на наличие более 6 символов
    public static function checkPassword ($password)
    {
        if(strlen($password) > 6){
            return true;
        }
        return false;
    }

    //Проверка Емейла
    public static function checkEmail($email)
    {
        if(filter_var($email,FILTER_VALIDATE_EMAIL)){
            return true;
        }
        return false;
    }

    public static function checkEmailExists($email){
        $db = Db::getConnection();

        $sql = 'SELECT COUNT(*) FROM user WHERE email = :email';

        $result =$db->prepare($sql);
        $result->bindParam(':email',$email,PDO::PARAM_STR);
        $result->execute();

        if($result->fetchColumn())
            return true;

        return false;
    }

    public static function checkUserData($email,$password){
        $db = Db::getConnection();

        $sql = "SELECT * FROM user WHERE email = :email AND password= :password";

        $result = $db->prepare($sql);
        $result->bindParam(':email', $email,PDO::PARAM_STR);
        $result->bindParam(':password', $password,PDO::PARAM_STR);
        $result->execute();

        $user = $result->fetch();
        if($user){
            return $user['id'];
        }
        return false;

    }

    // Запоминание пользователя(сессия)

    public static function auth($userId){

        $_SESSION['user'] = $userId;
    }

    //Проверка (кабинет) зарегистрирован ли пользователь

    public static function checkLogged(){

        if(isset($_SESSION['user'])){
            return$_SESSION['user'];
        }

        header('Location: /user/login');
    }

    // Проверка иконки входа/выхода

    public static function isGuest(){

        if(isset($_SESSION['user'])){
            return false;
        }

        return true;
    }

    // Получаем пользователя по id
    public static function getUserById($id){
        if($id){
            $db = Db::getConnection();

            $sql = 'SELECT * FROM user WHERE id = :id';

            $result = $db->prepare($sql);
            $result->bindParam(':id',$id,PDO::PARAM_INT);

            //  Указываемчто хотим получить данные в виде масива
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $result->execute();


            return $result->fetch();
        }

    }

    // Редактирование данных пользователя(Самим пользователем)

    public static function edit($id,$name,$number,$email,$password){
        $db =  Db::getConnection();

        $sql = "UPDATE user 
         SET name = :name, number = :number, email = :email, password = :password
         WHERE id = :id ";

        $result = $db->prepare($sql);
        $result->bindParam(':id',$id,PDO::PARAM_INT);
        $result->bindParam(':name',$name, PDO::PARAM_STR);
        $result->bindParam(':number',$number, PDO::PARAM_INT);
        $result->bindParam(':email',$email, PDO::PARAM_STR);
        $result->bindParam(':password',$password, PDO::PARAM_STR);

        return  $result->execute();

    }


}