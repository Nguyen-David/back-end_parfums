<?php
/**
 * Created by PhpStorm.
 * User: Lenovo Z570
 * Date: 19.05.2018
 * Time: 15:44
 */

class Comparison
{
    public static function addProduct($id){
        $id = intval($id);

        //Масив для хранение  товаров в сравнении
        $productsInComparison = array();


        // Если товари есть в сравнении(Они храняться в сессии)
        if(isset($_SESSION['productsComparison'])){
            $productsInComparison = $_SESSION['productsComparison'];
        }


            // Если товар первый раз добавлен в сравнение
            $productsInComparison[$id] = 1;


        $_SESSION['productsComparison'] = $productsInComparison;
        return self::countItems();
    }

    //Функция подсчета товаров в сравнении
    public static function countItems(){
        if(isset($_SESSION['productsComparison'])) {
            $count = 0;
            foreach ($_SESSION['productsComparison'] as $id => $quantity){
                $count = $count +$quantity;
            }
            return $count;
        }else{
            return 0;
        }

    }

    public static function getCompareProduct(){
        if(isset($_SESSION['productsComparison'])){
            return $_SESSION['productsComparison'];
        }
        return false;
    }

    public static function DeleteProduct($id){
        $id = intval($id);

        //Масив для хранение  товаров в корзине
        $productsInComparison = array();


        // Если товари есть в корзине(Они храняться в сессии)
        if(isset($_SESSION['productsComparison'])){
            $productsInComparison = $_SESSION['productsComparison'];
            unset($productsInComparison[$id]);
        }


        $_SESSION['productsComparison'] = $productsInComparison;
        return self::countItems();
    }

    public static function  testProduct($id){
        $productsInComparison = array();

        if(isset($_SESSION['productsComparison'])){
            $productsInComparison = $_SESSION['productsComparison'];
            foreach ($productsInComparison as $item){
                if ($productsInComparison[$id] == $item){
 
                    return true;
                }
            }
        }

        return false;

    }

}