<?php
/**
 * Created by PhpStorm.
 * User: Lenovo Z570
 * Date: 22.04.2018
 * Time: 13:25
 */

class Sub_Category
{
    public static function getSub_CategoriesList(){

        $db =Db::getConnection();
        $categoriesList = array();

        $result = $db->query('SELECT id,name,group_sub_categories '
            .'FROM sub_categories '
            .'ORDER BY sort_order ASC');
        $i =0;
        while ($row = $result->fetch()){
            $categoriesList[$i]['id'] = $row['id'];
            $categoriesList[$i]['name'] = $row['name'];
            $categoriesList[$i]['group_sub_categories'] = $row['group_sub_categories'];
            $i++;
        }
        return $categoriesList;
    }
}