<?php

namespace App\Controllers;

use App\Models\Product;
use App\Models\Service;

class Index
{

    public function __invoke()
    {
        $view = new \View();

        $view->products = Product::findAll();
        $view->services = Service::findAll();


        $view->display(__DIR__ . '/../Templates/Index.php');
    }

}
