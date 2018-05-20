<?php

class SiteController {

    public function actionIndex(){
        $categories_data = array();
        $categories_data = Category::getCategoriesList();
        $sub_categories_data = array();
        $sub_categories_data = Sub_Category::getSub_CategoriesList();
        $blog_data = array();
        $blog_data = Blog_data::getBlogList();
        $latestProduct = array();
        $latestProduct = Product::getProduct(1,10);
        $hitProduct = array();
        $hitProduct = Product::getProduct(1,20);
        $saleProduct = array();
        $saleProduct = Product::getProduct(1,20);

        require_once (ROOT. '/view/site/index.php');





        return true;
    }


    public static function actionContacts(){

        $mail = 'devid.nguyen21@gmail.com';
        $subject = 'Тема письма';
        $message = 'Текст сообщения';
        $result = mail($mail,$subject,$message);

        var_dump($result);
        die;
    }

}