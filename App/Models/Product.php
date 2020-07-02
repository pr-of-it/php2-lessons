<?php

namespace App\Models;

class Product extends \App\Model implements HasPriceInterface, HasTitle
{

    use HasPriceTrait;

    protected const TABLE = 'products';

    public string $title;

    public function getTitle(): string
    {
        return $this->title;
    }

}
