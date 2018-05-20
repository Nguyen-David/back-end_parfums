<?php
/**
 * Created by PhpStorm.
 * User: Lenovo Z570
 * Date: 13.05.2018
 * Time: 14:25
 */

class MainMenuController
{
    public function actionCompany(){
        $categories_data = array();
        $categories_data = Category::getCategoriesList();

        $sub_categories_data = array();
        $sub_categories_data = Sub_Category::getSub_CategoriesList();

        require_once(ROOT . '/view/mainmenu/about_us.php');

        return true;
    }

    public function actionBlog(){
        $categories_data = array();
        $categories_data = Category::getCategoriesList();

        $sub_categories_data = array();
        $sub_categories_data = Sub_Category::getSub_CategoriesList();

        $blog_data = array();
        $blog_data = Blog_data::getBlogList();

        require_once(ROOT . '/view/mainmenu/blog.php');

        return true;
    }

    public function actionContacts(){
        $categories_data = array();
        $categories_data = Category::getCategoriesList();

        $sub_categories_data = array();
        $sub_categories_data = Sub_Category::getSub_CategoriesList();

        require_once(ROOT . '/view/mainmenu/contacts.php');

        return true;
    }

    public function actionDelivery(){
        $categories_data = array();
        $categories_data = Category::getCategoriesList();

        $sub_categories_data = array();
        $sub_categories_data = Sub_Category::getSub_CategoriesList();

        require_once(ROOT . '/view/mainmenu/delivery.php');

        return true;
    }

    public function actionPay(){
        $categories_data = array();
        $categories_data = Category::getCategoriesList();

        $sub_categories_data = array();
        $sub_categories_data = Sub_Category::getSub_CategoriesList();

        require_once(ROOT . '/view/mainmenu/pay.php');

        return true;
    }

}