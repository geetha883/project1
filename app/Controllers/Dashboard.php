<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()

    {
       $data = [];


       echo view('templetes/header', $data);
       echo view('dashboard');
       echo view('templetes/footer');
    }
}
