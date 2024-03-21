<?php

/**
 * This file is used only to test the library.
 */

namespace App\Controllers;

use Vitafeu\EasyMVC\Controller;

use App\Models\User;

class IndexController extends Controller {
    public function home() {
        $data = User::read();

        $this->render('Home');
    }
}