<?php
/**
 * Created by PhpStorm.
 * User: Lenovo Z570
 * Date: 09.05.2018
 * Time: 13:46
 */

class Cart
{

    public static function addProduct($id){
        $id = intval($id);

        //Масив для хранение  товаров в корзине
        $productsInCart = array();

        // Если товари есть в корзине(Они храняться в сессии)
        if(isset($_SESSION['products'])){
            $productsInCart = $_SESSION['products'];
        }

        //Если товар есть в корзине, но добавлен еще раз(Увеличиваем количество)
        if(array_key_exists($id,$productsInCart))
        {
            $productsInCart[$id]++;
        }else{
            // Если товар первый раз добавлен в корзину
            $productsInCart[$id] = 1;
        }

        $_SESSION['products'] = $productsInCart;
        return self::countItems();
    }

    //Функция подсчета товаров в корзине
    public static function countItems(){
        if(isset($_SESSION['products'])) {
            $count = 0;
            foreach ($_SESSION['products'] as $id => $quantity){
                $count = $count +$quantity;
            }
            return $count;
        }else{
            return 0;
        }

    }

   public static function getProducts(){
        if(isset($_SESSION['products'])){
            return $_SESSION['products'];
        }
        return false;
   }

    public static function getTotalPrice($products){
        $productsInCart = self::getProducts();

        $total = 0;

        if($productsInCart){
            foreach ($products as $item){
                $total += $item['price'] * $productsInCart[$item['id']];
            }
        }

        return $total;
    }

}