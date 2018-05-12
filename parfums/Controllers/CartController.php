<?php
/**
 * Created by PhpStorm.
 * User: Lenovo Z570
 * Date: 09.05.2018
 * Time: 13:44
 */

class CartController
{

    public function actionAddAjax($id){
        // Добавляем товар в корзину
        echo Cart::addProduct($id);
        return true;
    }

    public function actionIndex(){
        $categories = array();
        $categories = Category::getCategoriesList();

        $productsInCart = false;

        $productsInCart = Cart::getProducts();

        if($productsInCart){
            // Получаем полную информацию о товарах для списка
            $productsIds = array_keys($productsInCart);
            $products = Product::getProductByIds($productsIds);

            // Получаем общую стоимость товара
            $totalPrice = Cart::getTotalPrice($products);
        }

        require_once(ROOT . '/view/cart/index.php');

        return true;
    }

    public static function actionAddAjax2(){
        $categories = array();
        $categories = Category::getCategoriesList();

        $productsInCart = false;

        $productsInCart = Cart::getProducts();

        if($productsInCart){
            // Получаем полную информацию о товарах для списка
            $productsIds = array_keys($productsInCart);
            $products = Product::getProductByIds($productsIds);

            // Получаем общую стоимость товара
            $totalPrice = Cart::getTotalPrice($products);
        }
        echo $totalPrice;

        return true;
    }

}