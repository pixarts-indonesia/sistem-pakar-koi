<?php
namespace App\Modules\Backend\Controllers;

use CodeIgniter\Controller;
use Config\Services;
use App\Modules\Backend\Models\AuthModel;

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
        if ($this->session->get('admin')) {
            return redirect()->to('admin')->with('info', 'Kamu sudah login');
        }

        $this->validation->setRules($this->models->validationRulesLogin);
        $validation = $this->validation->withRequest($this->request)->run();
        if ($validation) {
            $post = (object)$this->request->getPost();
            $user = $this->models->getData(['username' => $post->username]);
            if ($user && password_verify($post->password, $user->password)) {
                $this->session->set('admin', $user);
                return redirect()->to('admin')->with('info', 'Selamat datang, kamu berhasil login');
            } else {
                $this->session->setFlashdata('error', 'Kamu belum terdaftar, silahkan daftar terlebih dahulu');
            }
        }

        $data['title'] = 'Login';
        $data['validation'] = ($this->request->getPost() && !$validation) ? true : false;
        $data['params'] = (object)$this->request->getPost();
        return view('App\Modules\Backend\Views\Auth\login', $data);
    }

    public function logout()
    {
        $this->session->remove('admin');
        return redirect()->to('admin/login')->with('info', 'Kamu berhasil keluar');
    }
}
