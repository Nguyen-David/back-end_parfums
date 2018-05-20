<?php
/**
 * Created by PhpStorm.
 * User: Lenovo Z570
 * Date: 19.05.2018
 * Time: 15:43
 */

class ComparisonController
{
    public function actionAddAjaxComparison($id){
        // Добавляем товар в Сравнение
        echo Comparison::addProduct($id);
        return true;
    }

    public function actionDeleteAjax($id){
        // Удаляем товар из Сравнение
        echo Comparison::DeleteProduct($id);
        return true;
    }

    public function actionIndex(){
        $categories = array();
        $categories = Category::getCategoriesList();

        $productsInCompare = false;

        $productsInCompare = Comparison::getCompareProduct();


        if($productsInCompare){
            // Получаем полную информацию о товарах для списка
            $productsIds = array_keys($productsInCompare);
            $products = Product::getProductByIds($productsIds);
        }

        require_once(ROOT . '/view/comparison/index.php');

        return true;
    }

    public function actionDeleteFromComparison($id){
        // Удаление товара из корзины
        Comparison::DeleteProduct($id);
        header("Location:/comparison/");
    }
}