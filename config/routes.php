<?php
return array(

    'product/([0-9]+)' => 'product/view/$1', // actionView в ProductController

    'catalog/page-([0-9]+)' => 'catalog/index/$1',
    'catalog' =>'catalog/index',

    'about_us' => 'mainMenu/company',
    'blog' => 'mainMenu/blog',
    'contacts' => 'mainMenu/contacts',
    'delivery' => 'mainMenu/delivery',
    'pay' => 'mainMenu/pay',

    'confidance' => 'footerMenu/confidance',
    'agreement' => 'footerMenu/agreement',
    'exchange' =>  'footerMenu/exchange',

    'subcategory/([0-9]+)/page-([0-9]+)' => 'catalog/subcategory/$1/$2',
    'subcategory/([0-9]+)' => 'catalog/subcategory/$1',
    'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2',
    'category/([0-9]+)' => 'catalog/category/$1',


    'comparison/deleteFromComparison/([0-9]+)' => 'comparison/deleteFromComparison/$1',
    'comparison/deleteAjax/([0-9]+)' => 'comparison/deleteAjax/$1',
    'comparison/addAjax/([0-9]+)' => 'comparison/addAjaxComparison/$1',
    'comparison' => 'comparison/index',

    'cart/deleteFromCart/([0-9]+)' => 'cart/deleteFromCart/$1',
    'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1',
    'cart/addAjax2' => 'cart/addAjax2',
    'cart' => 'cart/index',



    'user/register' => 'user/register',
    'user/login'=> 'user/login',
    'user/logout' => 'user/logout',

    'cabinet/edit' => 'cabinet/edit',
    'cabinet' => 'cabinet/index',

   'contact' => 'site/contact',
    '' => 'site/index', // actionIndex в SiteController


  //  'news/([0-9]+)' => 'news/view/$1',
    //'news' => 'news/index',
//    'news/([0-9]+)' => 'news/view',
//    'news/15' => 'news/view',
//
//    'news' => 'news/index', //action в SiteController



    //'products' => 'product/list', // actionList в Productcontroller
);
