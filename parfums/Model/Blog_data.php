<?php
/**
 * Created by PhpStorm.
 * User: Lenovo Z570
 * Date: 22.04.2018
 * Time: 15:02
 */

class Blog_data
{
    public static function getBlogList(){

        $db =Db::getConnection();
        $blogList = array();

        $result = $db->query('SELECT id,name,content,date '
            .'FROM blogs '
            .'ORDER BY sort_order ASC');
        $i =0;
        while ($row = $result->fetch()){
            $blogList[$i]['id'] = $row['id'];
            $blogList[$i]['name'] = $row['name'];
            $blogList[$i]['content'] = $row['content'];
            $blogList[$i]['date'] = $row['date'];
            $i++;
        }
        return $blogList;
    }
}