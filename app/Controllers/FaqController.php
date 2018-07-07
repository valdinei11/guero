<?php

namespace App\Controllers;

use Core\BaseController;
use Core\Container;

class FaqController extends BaseController {

    public function index() {
        $this->setPageTitle("FAQ");
        $this->renderView("faq/index", "layout");
    }

    public function show($id) {
        $this->view->faq = $this->faq->find($id);

        $this->setPageTitle("FAQ - {$this->view->faq->question}");
        $this->renderView("faq/show", "layout");
    }
}
