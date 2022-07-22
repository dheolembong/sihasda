<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Login | SIHASDA SULUT'
        ];
        echo view('layout/header', $data);
        echo view('login/login');
        echo view('layout/footer');
    }

    public function register()
    {
        $data = [
            'title' => 'Register | SIHASDA SULUT'
        ];
        echo view('layout/header', $data);
        echo view('login/register');
        echo view('layout/footer');
    }

    public function forgot_pass()
    {
        $data = [
            'title' => 'Forgot Password | SIHASDA SULUT'
        ];
        echo view('layout/header', $data);
        echo view('login/forgot-password');
        echo view('layout/footer');
    }
}
