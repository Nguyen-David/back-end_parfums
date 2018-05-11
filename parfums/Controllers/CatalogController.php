<?php




class CatalogController
{
    public function actionIndex($page = 1)
    {
        $categories_data = array();
        $categories_data = Category::getCategoriesList();
        $sub_categories_data = array();
        $sub_categories_data = Sub_Category::getSub_CategoriesList();
        $latestProduct = array();
        $latestProduct = Product::getProduct($page,Product::SHOW_BY_DEFAULT);

        $total = Product::getAllTotalProducts();

        $pagination = new Pagination($total,$page,Product::SHOW_BY_DEFAULT,'page-');

        require_once(ROOT . '/view/catalog/view.php');

        return true;
    }

    public function actionCategory($categoryId, $page = 1){
        $categories_data = array();
        $categories_data = Category::getCategoriesList();

        $sub_categories_data = array();
        $sub_categories_data = Sub_Category::getSub_CategoriesList();

        $product_data = array();
        $product_data = Product::getProductListByCategory($categoryId, $page);

        $total = Product::getTotalProductsInCategory($categoryId);

        $pagination = new Pagination($total,$page,Product::SHOW_BY_DEFAULT,'page-');
        require_once(ROOT . '/view/catalog/category.php');

        return true;
    }
}