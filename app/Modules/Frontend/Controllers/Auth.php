<?php
namespace App\Modules\Frontend\Controllers;

use CodeIgniter\Controller;
use Config\Services;
use App\Modules\Frontend\Models\AuthModel;

class Auth extends Controller
{
    protected $session;
    
    function __construct()
    {
        $this->request = Services::request();
        $this->session = Services::session();
        $this->session->start();
    }

    public function login()
    {
        if ($this->request->getPost()) {
            $post = (object)$this->request->getPost();
            $this->session->set('user', $post);
            return redirect()->to('/')->with('info', 'Selamat datang, kamu berhasil login');
        }
        $data['title'] = 'Login';
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
