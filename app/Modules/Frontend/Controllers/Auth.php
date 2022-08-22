<?php
namespace App\Modules\Frontend\Controllers;

use CodeIgniter\Controller;
use App\Modules\Frontend\Models\AuthModel;

class Auth extends Controller
{
    public function login()
    {
        $data['title'] = 'Login';
        echo view('\App\Modules\Frontend\Views\Auth\login', $data);
    }

    public function forgot_password()
    {
        $data['title'] = 'Lupa Kata Sandi';
        echo view('\App\Modules\Frontend\Views\Auth\forgot_password', $data);
    }

    public function daftar()
    {
        $data['title'] = 'Daftar';
        echo view('\App\Modules\Frontend\Views\Auth\daftar', $data);
    }
}
