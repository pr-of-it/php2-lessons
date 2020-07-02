<?php

namespace App\Models;

class Service extends \App\Model implements HasPriceInterface
{
    use HasPriceTrait;

    protected const TABLE = 'services';

    public string $title;

}
