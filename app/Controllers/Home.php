<?php

namespace App\Controllers;
use \CodeIgniter\Controller;
use App\Models\VacanciesModel;

class Home extends BaseController
{
    public function index()
    {
        $vacanciesModel = new VacanciesModel();
        $data['vacancies']=$vacanciesModel->listVacancies();
        return view('header')
            . view('filters')
            . view('board', $data)
            . view('footer');
    }
}
