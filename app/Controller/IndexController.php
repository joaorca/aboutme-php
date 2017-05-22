<?php

namespace App\Controller;

class IndexController extends BaseController
{
    public function index()
    {
        echo $this->view('cv', ['testvar' => "joaorca"]);
    }
}