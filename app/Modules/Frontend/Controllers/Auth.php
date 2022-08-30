<?php
namespace App\Modules\Frontend\Controllers;

use CodeIgniter\Controller;
use Config\Services;
use Config\Encryption;
use App\Modules\Frontend\Models\AuthModel;

class Auth extends Controller
{
    protected $session;
    protected $request;
    protected $validation;
    protected $models;
    
    function __construct()
    {
        helper(['url', 'form']);
        $this->session = Services::session();
        $this->session->start();
        $this->request = Services::request();
        $this->validation = Services::validation();
        $this->models = new AuthModel;
    }

    public function login()
    {
        $this->validation->setRules($this->models->validationRulesLogin);
        $validation = $this->validation->withRequest($this->request)->run();
        if ($validation) {
            $post = (object)$this->request->getPost();
            $user = $this->models->getData(['username' => $post->username]);
            if ($user && password_verify($post->password, $user->password)) {
                $this->session->set('user', $user);
                return redirect()->to('/')->with('info', 'Selamat datang, kamu berhasil login');
            } else {
                $this->session->setFlashdata('error', 'Kamu belum terdaftar, silahkan daftar terlebih dahulu');
            }
        }

        $data['title'] = 'Login';
        $data['validation'] = ($this->request->getPost() && !$validation) ? true : false;
        $data['params'] = (object)$this->request->getPost();
        return view('App\Modules\Frontend\Views\Auth\login', $data);
    }

    public function forgot_password()
    {
        $data['title'] = 'Lupa Kata Sandi';
        return view('App\Modules\Frontend\Views\Auth\forgot_password', $data);
    }

    public function daftar()
    {
        $this->validation->setRules($this->models->validationRulesDaftar);
        $validation = $this->validation->withRequest($this->request)->run();

        if ($validation) {
            $post = (object)$this->request->getPost();
            $post->password = password_hash($post->password, PASSWORD_DEFAULT);
            if ($this->models->save($post)) {
                $post->id = $this->models->getInsertID();
                $this->session->set('user', $post);
                return redirect()->to('/')->with('info', 'Selamat datang, kamu berhasil login');
            }
            return redirect()->to('/daftar')->with('error', 'Terjadi masalah silahkan ulang beberapa saat lagi');
        }

        $data['title'] = 'Daftar';
        $data['validation'] = ($this->request->getPost()) ? true : false;
        $data['params'] = (object)$this->request->getPost();
        return view('App\Modules\Frontend\Views\Auth\daftar', $data);
    }

    public function logout()
    {
        $this->session->remove('user');
        return redirect()->to('/')->with('info', 'Kamu berhasil keluar');
    }
}
