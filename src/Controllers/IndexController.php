<?php

/**
 * This file is used only to test the library.
 */

namespace Vitafeu\EasyMVC\Controllers;

use Vitafeu\EasyMVC\Controller;
use Vitafeu\EasyMVC\Models\User;

class IndexController extends Controller {
    public function home() {
        $data = User::read();

        $this->render('Home', $data);
    }

    public function test($params) {
        $data = [
            'age' => $params['age'],
            'firstName' => $params['firstName'],
        ];

        $this->render('Test', $data);
    }

    public function testRedirect() {
        $this->redirect('/');
    }
}