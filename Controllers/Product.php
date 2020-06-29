<?php

namespace Controllers;

use Exceptions\Http404Exception;
use Models\Product as Model;

class Product
{

    public function __invoke()
    {
        $view = new \View();
        $view->product = Model::findById($_GET['id']);
        if (empty($view->product)) {
            throw new Http404Exception();
        }
        $view->display(__DIR__ . '/../Templates/Product.php');
    }

}
