<?php
/**
 * Created by PhpStorm.
 * User: Lenovo Z570
 * Date: 13.05.2018
 * Time: 15:17
 */

class footerMenuController
{
    public function actionConfidance(){
        $categories_data = array();
        $categories_data = Category::getCategoriesList();

        $sub_categories_data = array();
        $sub_categories_data = Sub_Category::getSub_CategoriesList();

        require_once(ROOT . '/view/footermenu/confidance.php');

        return true;
    }

    public function actionAgreement(){
        $categories_data = array();
        $categories_data = Category::getCategoriesList();

        $sub_categories_data = array();
        $sub_categories_data = Sub_Category::getSub_CategoriesList();

        require_once(ROOT . '/view/footermenu/agreement.php');

        return true;
    }

    public function actionExchange(){
        $categories_data = array();
        $categories_data = Category::getCategoriesList();

        $sub_categories_data = array();
        $sub_categories_data = Sub_Category::getSub_CategoriesList();

        require_once(ROOT . '/view/footermenu/exchange.php');

        return true;
    }

}