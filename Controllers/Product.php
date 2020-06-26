<?php

namespace Controllers;

use Models\Product as Model;
use Models\Service;

class Product
{

    public function __invoke()
    {
        $view = new \View();

        $view->product = Model::findById($_GET['id']);

        $view->display(__DIR__ . '/../Templates/Product.php');
    }

}
