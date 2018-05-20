<?php
/**
 * Created by PhpStorm.
 * User: Lenovo Z570
 * Date: 04.05.2018
 * Time: 14:30
 */

class UserController
{

    public function actionRegister()
    {
        $name = '';
        $email = '';
        $password = '';
        $number = '';


        //Проверяем заполнили ли форму
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $number = $_POST['number'];
        }

        $result = false;
        $errors = false;

        if(!User::checkName($name)){
            $errors[] = 'Имя должно содержать более 2-х символов';
        }

        if(!User::checkEmail($email)){
            $errors[] = 'Неправильный email';
        }

        if(!User::checkNumber($number)){
            $errors[] = 'Номер неверный';
        }

        if(!User::checkPassword($password)){
            $errors[] = 'Пароль должен содержать более 6 символов';
        }

        if (User::checkEmailExists($email)){
            $errors[] = 'Такой email уже существует';
        }

        if ($errors == false){
            $result = User::register($name,$number,$email,$password);
        }

        require_once(ROOT . '/view/user/register.php');

        return true;
    }


    public function actionLogin()
    {
        $email = '';
        $password = '';


        //Проверяем заполнили ли форму
        if(isset($_POST['submit'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
        }


        $errors = false;

        //Валидация полей
        if(!User::checkEmail($email)){
            $errors[] = 'Неправильный email';
        }

        if(!User::checkPassword($password)){
            $errors[] = 'Пароль должен содержать более 6 символов';
        }

        //Проверяем существует ли пользователь
        $userId =User::checkUserData($email,$password);

        if ($userId == false)
        {
            $errors[] = 'Неправильные данные для входа на сайт';
        }
        else{
            //Если пользователь есть , запоминаем данные (сессия)
            User::auth($userId);

          header("Location: /cabinet/");
        }

        require_once(ROOT . '/view/user/login.php');

        return true;
    }

    public function actionLogout(){
        unset($_SESSION['user']);
        header("Location:/");
    }

}