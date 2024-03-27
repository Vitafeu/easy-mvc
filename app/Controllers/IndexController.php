<?php

namespace App\Controllers;

use Vitafeu\EasyMVC\Controller;

class IndexController extends Controller {
    public function home() {
        $this->render('Home');
    }
}