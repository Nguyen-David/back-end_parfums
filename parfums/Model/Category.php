<?php
/**
 * Created by PhpStorm.
 * User: Lenovo Z570
 * Date: 21.04.2018
 * Time: 21:13
 */

class Category
{

    public static function getCategoriesList(){

        $db =Db::getConnection();
        $categoriesList = array();

        $result = $db->query('SELECT id,name,sub_categories '
            .'FROM categories '
            .'ORDER BY sort_order ASC');
        $i =0;
        while ($row = $result->fetch()){
           $categoriesList[$i]['id'] = $row['id'];
           $categoriesList[$i]['name'] = $row['name'];
            $categoriesList[$i]['sub_categories'] = $row['sub_categories'];
            $i++;
        }
        return $categoriesList;
    }
}