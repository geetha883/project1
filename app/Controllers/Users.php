<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(){
       $data = [];
       helper(['form']);
       echo view('templetes/header', $data);
       echo view('login');
       echo view('templetes/footer');
    }

    public function register(){
        $data =[];
        helper(['form']);

        echo view('templetes/header', $data);
        echo view('register');
        echo view('templetes/footer');
    }
        

}
