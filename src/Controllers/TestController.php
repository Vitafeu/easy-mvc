<?php

namespace Vitafeu\EasyMVC\Controllers;

use Vitafeu\EasyMVC\Controller;

class TestController extends Controller {
    
    public function test() {
        $this->render('test');
    }
}