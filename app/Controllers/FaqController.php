<?php

namespace App\Controllers;

use Core\BaseController;
use Core\Container;

class FaqController extends BaseController {
    public function __construct() {
        parent::__construct();
        $this->faq = Container::getModel("Faq");
    }

    public function index() {
        $this->view->faq = $this->faq->all();

        $this->setPageTitle("FAQ");
        $this->renderView("faq/index", "layout");
    }

    public function show($id) {
        $this->view->faq = $this->faq->find($id);

        $this->setPageTitle("FAQ - {$this->view->faq->question}");
        $this->renderView("faq/show", "layout");
    }
}
