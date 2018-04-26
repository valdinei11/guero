<?php

namespace App\Controllers;

use Core\BaseController;
use App\Models\Faq;

class FaqController extends BaseController {
    public function index() {
        $this->setPageTitle("FAQ - Guero");
        $this->renderView("faq/index", "layout");
    }

    public function show($id) {
        echo $id . "<br>";
        echo $request->get->nome . "<br>";
        echo $request->get->sexo . "<br>";
    }
}
