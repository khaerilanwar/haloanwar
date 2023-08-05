<?php

namespace App\Controllers;

class MachineLearning extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'machinelearning'
        ];

        return view('/machine-learning/index', $data);
    }

    public function cv()
    {
        $data = [
            'title' => 'machinelearning'
        ];

        return view('/machine-learning/list-cv', $data);
    }
}
