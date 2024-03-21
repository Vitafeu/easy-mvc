<?php

namespace App\Controllers;

use Vitafeu\EasyMVC\Controller;

use App\Models\User;

class UserController extends Controller {
    public function create($params) {
        User::create($params);

        $this->redirect('/');
    }
}