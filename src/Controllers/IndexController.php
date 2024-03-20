<?php

namespace Vitafeu\EasyMVC\Controllers;

use Vitafeu\EasyMVC\Controller;

class IndexController extends Controller {
    
    public function home() {
        $data = [
            'Name' => 'Vitafeu',
        ];

        $this->render('Home', $data);
    }

    public function test() {
        $this->render('Test');
    }
}