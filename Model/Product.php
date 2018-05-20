<?php
/**
 * Created by PhpStorm.
 * User: Lenovo Z570
 * Date: 23.04.2018
 * Time: 16:05
 */

class Product
{
    const SHOW_BY_DEFAULT =  6;

    public  static function getProduct( $page = 1,$count)
    {
        $page = intval($page);
        $offset = ($page - 1) * self::SHOW_BY_DEFAULT;
        $count = intval($count);
        $db =Db::getConnection();
        $productList = array();

        $result = $db->query('SELECT id,name,price,image,is_new,is_sale,is_hit,price_sale,is_closeout '
            .'FROM product '
            .'WHERE status = "1" '
            .'ORDER BY id ASC '
            .'LIMIT '.$count
            .' OFFSET '. $offset );

        $i =0;
        while ($row = $result->fetch()){
            $productList[$i]['id'] = $row['id'];
            $productList[$i]['name'] = $row['name'];
            $productList[$i]['price'] = $row['price'];
            $productList[$i]['image'] = $row['image'];
            $productList[$i]['is_new'] = $row['is_new'];
            $productList[$i]['is_sale'] = $row['is_sale'];
            $productList[$i]['is_hit'] = $row['is_hit'];
            $productList[$i]['price_sale'] = $row['price_sale'];
            $productList[$i]['is_closeout'] = $row['is_closeout'];

            $i++;
        }
        return $productList;
    }

    public  static function getProductListByCategory($categoryId = false ,$page = 1)
    {
        if ($categoryId){
        $page = intval($page);
        $offset = ($page - 1) * self::SHOW_BY_DEFAULT;
        $db =Db::getConnection();
        $productListBycategory = array();

        $result = $db->query('SELECT id,name,price,category_id,image,is_new,is_sale,is_hit,price_sale,is_closeout '
            .'FROM product '
            ."WHERE status = '1' AND category_id = '$categoryId' "
            .'ORDER BY id DESC '
            .'LIMIT '. self::SHOW_BY_DEFAULT
            .' OFFSET '. $offset );
        $i =0;
        while ($row = $result->fetch()){
            $productListBycategory[$i]['id'] = $row['id'];
            $productListBycategory[$i]['name'] = $row['name'];
            $productListBycategory[$i]['price'] = $row['price'];
            $productListBycategory[$i]['category_id'] = $row['category_id'];
            $productListBycategory[$i]['image'] = $row['image'];
            $productListBycategory[$i]['is_new'] = $row['is_new'];
            $productListBycategory[$i]['is_sale'] = $row['is_sale'];
            $productListBycategory[$i]['is_hit'] = $row['is_hit'];
            $productListBycategory[$i]['price_sale'] = $row['price_sale'];
            $productListBycategory[$i]['is_closeout'] = $row['is_closeout'];
            $i++;
        }
        return $productListBycategory;
        }
    }

    public  static function getProductListBySubCategory($categoryCode = false ,$page = 1)
    {
        if ($categoryCode){
            $page = intval($page);
            $offset = ($page - 1) * self::SHOW_BY_DEFAULT;
            $db =Db::getConnection();
            $productListBySubcategory = array();

            $result = $db->query('SELECT id,name,price,image,is_new,is_sale,is_hit,price_sale,is_closeout '
                .'FROM product '
                ."WHERE status = '1' AND code = '$categoryCode' "
                .'ORDER BY id DESC '
                .'LIMIT '. self::SHOW_BY_DEFAULT
                .' OFFSET '. $offset );
            $i =0;
            while ($row = $result->fetch()){
                $productListBySubcategory[$i]['id'] = $row['id'];
                $productListBySubcategory[$i]['name'] = $row['name'];
                $productListBySubcategory[$i]['price'] = $row['price'];
                $productListBySubcategory[$i]['image'] = $row['image'];
                $productListBySubcategory[$i]['is_new'] = $row['is_new'];
                $productListBySubcategory[$i]['is_sale'] = $row['is_sale'];
                $productListBySubcategory[$i]['is_hit'] = $row['is_hit'];
                $productListBySubcategory[$i]['price_sale'] = $row['price_sale'];
                $productListBySubcategory[$i]['is_closeout'] = $row['is_closeout'];

                $i++;
            }
            return $productListBySubcategory;
        }
    }


    public  static function getProductListById($id)
    {
        $id = intval($id);
        if($id){
            $db =Db::getConnection();
            $result = $db->query ('SELECT * '
            .'FROM product '
            .'WHERE id='.$id);
            $result->setFetchMode(PDO::FETCH_ASSOC);

            return $result->fetch();
        }
    }

    public  static function getTotalProductsInCategory($categoryId)
    {

            $db =Db::getConnection();
            $result = $db->query ('SELECT count(id) AS count '
                .'FROM product '
                .'WHERE status="1" AND category_id =' .$categoryId);

            $result->setFetchMode(PDO::FETCH_ASSOC);
            $row = $result->fetch();

            return $row['count'];

    }

    public  static function getTotalProductsInSubCategory($categoryCode)
    {

        $db =Db::getConnection();
        $result = $db->query ('SELECT count(id) AS count '
            .'FROM product '
            .'WHERE status="1" AND code =' .$categoryCode);

        $result->setFetchMode(PDO::FETCH_ASSOC);
        $row = $result->fetch();

        return $row['count'];

    }



    public  static function getAllTotalProducts()
    {

        $db =Db::getConnection();
        $result = $db->query ('SELECT count(id) AS count '
            .'FROM product '
            .'WHERE status="1"');

        $result->setFetchMode(PDO::FETCH_ASSOC);
        $row = $result->fetch();

        return $row['count'];

    }


    public static function getProductByIds($idsArray){
        $products = array();

        $db =Db::getConnection();

        $idsString = implode(',',$idsArray );

        $sql = "SELECT * FROM product WHERE status = '1' AND id IN ($idsString)";

        $result = $db->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);

        $i = 0;
        while ($row = $result->fetch()){
            $products[$i]['id'] = $row['id'];
            $products[$i]['code'] = $row['code'];
            $products[$i]['name'] = $row['name'];
            $products[$i]['price'] = $row['price'];
            $products[$i]['brand'] = $row['brand'];
            $products[$i]['image'] = $row['image'];

            $i++;
        }
        return $products;

    }

}