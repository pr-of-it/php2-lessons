<?php

namespace App\Models;

class User extends \App\Model
{

    protected const TABLE = 'users';

    public string $email;
    public string $phone;

}
