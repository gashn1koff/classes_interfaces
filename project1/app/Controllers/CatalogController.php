<?php


namespace App\Controllers;

use App\Core\DB;
use App\Models\Product;

class CatalogController
{
    public function index(){
        $products = Product::search();
        render('catalog/index',['products' => $products]);
    }

    public function showProduct($id){
        $product = Product::finById($id);
        render('catalog/product_detail',['product' => $product]);
    }

    public function addProduct(){
        render('catalog/add_product');
    }

    public function saveProduct()
    {
        $sql = "INSERT INTO products (`name`, `price`) VALUES ('{$_POST['name']}', '{$_POST['price']}')";
        echo $sql;
        DB::getConnection()->query($sql);
    }


}