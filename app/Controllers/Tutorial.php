<?php

namespace App\Controllers;

class Tutorial extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'tutorial'
        ];

        return view('tutorial/index', $data);
    }
}
