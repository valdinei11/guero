<?php

namespace App\Controllers;

class FaqController {
    public function index() {
        echo "Posts";
    }

    public function show($id) {
        echo $id . "<br>";
        echo $request->get->nome . "<br>";
        echo $request->get->sexo . "<br>";
    }
}
