<?php

namespace App\Controllers;

class HomeController extends BaseController
{

    public function index()
    {
        return view('home/index', [
            'title' => _r('home_index_title'),
        ]);
    }

}