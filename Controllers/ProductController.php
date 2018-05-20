<?php



class ProductController
{

    public function actionView($productid)
    {
        $categories_data = array();
        $categories_data = Category::getCategoriesList();

        $product = Product::getProductListById($productid);


        require_once(ROOT . '/view/product/view.php');

        return true;
    }
}