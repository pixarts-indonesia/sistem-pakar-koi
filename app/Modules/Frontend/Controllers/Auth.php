<?php
namespace App\Modules\Frontend\Controllers;

use CodeIgniter\Controller;
use App\Modules\Frontend\Models\AuthModel;
use Config\Services;

class Auth extends Controller
{
    protected $request;
    protected $session;
    
    function __construct()
    {
        $this->request = (new Services)::request();
        $this->session = \Config\Services::session();
        $this->session->start();
    }

    public function login()
    {
        $data['title'] = 'Login';
        if ($this->request->getPost()) {
            $post = $this->request->getPost();
            $this->session->set('user', $post);
            return redirect()->to('/')->with('info', 'Selamat datang, kamu berhasil login');
        }
        return view('App\Modules\Frontend\Views\Auth\login', $data);
    }

    public function forgot_password()
    {
        $data['title'] = 'Lupa Kata Sandi';
        return view('App\Modules\Frontend\Views\Auth\forgot_password', $data);
    }

    public function daftar()
    {
        $data['title'] = 'Daftar';
        return view('App\Modules\Frontend\Views\Auth\daftar', $data);
    }

    public function logout()
    {
        $this->session->remove('user');
        return redirect()->to('/')->with('info', 'Kamu berhasil keluar');
    }
}
