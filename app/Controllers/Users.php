<?php

namespace App\Controllers;

use App\Models\UserModel;

class Users extends BaseController
{
    public function login()
    {
        $data = [];
        helper(['form']);

        if ($this->request->getMethod() == 'POST') {
            $rules = [
                'email'    => 'required|min_length[6]|max_length[50]|valid_email',
                'password' => 'required|min_length[8]|max_length[255]|validateUser[email,password]',
            ];

            $errors = [
                'password' => [
                    'validateUser' => 'Email or Password don\'t match',
                ],
            ];

            if (!$this->validate($rules, $errors)) {
                $data['validation'] = $this->validator;
            } else {
                $model = new UserModel();
                $user = $model->where('email', $this->request->getVar('email'))->first();

                $this->setUserSession($user);
                return redirect()->to('/dashboard');
            }
        }

        echo view('templetes/header', $data);
        echo view('login');
        echo view('templetes/footer');
    }

    public function register()
    {
        $data = [];
        helper(['form']);

        if ($this->request->getMethod() == 'POST') {
            $rules = [
                'firstname'        => 'required|min_length[3]|max_length[50]',
                'lastname'         => 'required|min_length[3]|max_length[50]',
                'email'            => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email]',
                'password'         => 'required|min_length[8]|max_length[255]',
                'password_confirm' => 'matches[password]',
            ];

            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $model = new UserModel();
                $newData = [
                    'firstname' => $this->request->getVar('firstname'),
                    'lastname'  => $this->request->getVar('lastname'),
                    'email'     => $this->request->getVar('email'),
                    'password'  => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                ];
                $model->save($newData);

                session()->setFlashdata('success', 'Registration successful!');
                return redirect()->to('/login');
            }
        }

        echo view('templetes/header', $data);
        echo view('register');
        echo view('templetes/footer');
    }

    private function setUserSession($user)
    {
        $data = [
            'id'        => $user['id'],
            'firstname' => $user['firstname'],
            'lastname'  => $user['lastname'],
            'email'     => $user['email'],
            'isLoggedIn'=> true,
        ];

        session()->set($data);
        return true;
    }

   public function profile()
{
    // Fix: Redirect only if NOT logged in
    if (! session()->get('isLoggedIn')) {
        return redirect()->to('/login');
    }

    $data = [];
    helper(['form']);
    $model = new UserModel();

    if ($this->request->getMethod() == 'POST') {
        $rules = [
            'firstname' => 'required|min_length[3]|max_length[50]',
            'lastname'  => 'required|min_length[3]|max_length[50]',
        ];

        if ($this->request->getPost('password') != '') {
            $rules['password'] = 'required|min_length[8]|max_length[255]';
            $rules['password_confirm'] = 'matches[password]';
        }

        if (! $this->validate($rules)) {
            $data['validation'] = $this->validator;
        } else {
            $newData = [
                'id'        => session()->get('id'),
                'firstname' => $this->request->getPost('firstname'),
                'lastname'  => $this->request->getPost('lastname'),
            ];

            if ($this->request->getPost('password') != '') {
                $newData['password'] = password_hash(
                    $this->request->getPost('password'),
                    PASSWORD_DEFAULT
                );
            }

            $model->save($newData);
            session()->setFlashdata('success', 'Successfully Updated!');
            return redirect()->to('/profile');
        }
    }

    $data['user'] = $model->where('id', session()->get('id'))->first();

    echo view('templetes/header', $data);
    echo view('profile');
    echo view('templetes/footer');
}


    
    public function logout(){
        session()->destroy();
       return redirect()->to('/login');
    }
}
