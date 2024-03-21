<?php

namespace App\Models;

use Vitafeu\EasyMVC\Model;

class User extends Model {
    protected static $table = 'users';

    protected static $attributes = [
        'id' => 'INT AUTO_INCREMENT PRIMARY KEY',
        'name' => 'VARCHAR(255)',
        'email' => 'VARCHAR(255)',
    ];
}