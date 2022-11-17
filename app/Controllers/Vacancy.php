<?php

namespace App\Controllers;

class Vacancy extends BaseController
{
    public function index()
    {
        return view('header')
            . view('Vacancy')
            . view('board')
            . view('footer');
    }
}