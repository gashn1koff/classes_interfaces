<?php


namespace App\Controllers;


class HomeController
{
    public function showProduct(){
        echo 'Showproduct home';
    }

    public function contacts()
    {
        echo "contacts";
    }
    public function index(){
        render('home/index', [
            'name' => 'Nikita',
            'second_name' => 'Gashnikov',
        ]);
    }
}