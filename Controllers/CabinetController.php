<?php
/**
 * Created by PhpStorm.
 * User: Lenovo Z570
 * Date: 04.05.2018
 * Time: 22:57
 */

class CabinetController
{
    public function actionIndex(){
        // Получем идентификатор пользователя из сессии
        $userId = User::checkLogged();

        // Получаем данные пользователя за id из БД
        $user = User::getUserById($userId);

        require_once(ROOT . '/view/cabinet/index.php');

        return true;
    }

    public function actionEdit(){
        // Получем идентификатор пользователя из сессии
        $userId = User::checkLogged();

        // Получаем данные пользователя за id из БД
        $user = User::getUserById($userId);

        $name = $user['name'];
        $email = $user['email'];
        $password = $user['password'];
        $number = $user['number'];

        $result = false;

        if(isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $number = $_POST['number'];


            $errors = false;

            if (!User::checkName($name)) {
                $errors[] = 'Имя должно содержать более 2-х символов';
            }

            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильный email';
            }

            if (!User::checkNumber($number)) {
                $errors[] = 'Номер неверный';
            }

            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль должен содержать более 6 символов';
            }

            if ($errors == false) {
                $result = User::edit($userId, $name, $number, $email, $password);
            }

        }
            require_once(ROOT . '/view/cabinet/edit.php');

            return true;

    }
}