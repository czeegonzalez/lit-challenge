<?php

namespace App\Controllers;

use App\Models\VacanciesModel;

class Vacancy extends BaseController
{
    public function index($vacancyID)
    {
        $model = model(VacanciesModel::class);

        $data['vacancyDetail'] = $model->getVacancyDetail($vacancyID);
        $data['vacancies'] = $model->getSimilar($vacancyID);

        return view('header')
            . view('pages/vacancy', $data)
            .view('board',$data)
            .view('footer');
    }

}