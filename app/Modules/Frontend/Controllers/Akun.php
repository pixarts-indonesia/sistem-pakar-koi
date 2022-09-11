<?php
namespace App\Modules\Frontend\Controllers;

use CodeIgniter\Controller;
use Config\Services;
use App\Modules\Frontend\Models\AkunModel;

class Akun extends Controller
{
    protected $request;
    protected $session;
    protected $models;
    protected $validation;

    function __construct()
    {
        helper(['url', 'form']);
        $this->request = Services::request();
        $this->session = Services::session();
        $this->session->start();
        $this->models = new AkunModel;
        $this->validation = Services::validation();
    }

    public function index()
    {
        if (!$this->session->get('user')) {
            return redirect()->to('login')->with('error', 'Login terlebih dahulu');
        }

        $data['user'] = $this->models->getData(['id' => $this->session->get('user')->id]);
        $data['title'] = 'Akun';
        $data['main'] = true;

        return view('App\Modules\Frontend\Views\Akun\index', $data);
    }

    public function update()
    {
        if (!$this->session->get('user')) {
            return redirect()->to('login')->with('error', 'Login terlebih dahulu');
        }

        $this->validation->setRules($this->models->validationRules);
        $validation = $this->validation->withRequest($this->request)->run();

        if ($validation) {
            $post = (object)$this->request->getPost();
            $post->id = $this->session->get('user')->id;
            if ($this->models->update($post->id, $post)) {
                $post = (object)$this->request->getPost();
                return redirect()->to('akun')->with('success', 'Berhasil mengubah data');
            }
            return redirect()->to('/daftar')->with('error', 'Terjadi masalah silahkan ulang beberapa saat lagi');
        }

        $data['title'] = 'Ubah Akun';
        $data['validation'] = ($this->request->getPost()) ? true : false;
        $data['params'] = $this->models->getData(['id' => $this->session->get('user')->id]);
        $data['main'] = true;

        return view('App\Modules\Frontend\Views\Akun\update', $data);
    }

    public function forgotPassword()
    {
        if (!$this->session->get('user')) {
            return redirect()->to('login')->with('error', 'Login terlebih dahulu');
        }

        $this->validation->setRules($this->models->validationRulesForget);
        $validation = $this->validation->withRequest($this->request)->run();

        if ($validation) {
            $post = (object)$this->request->getPost();
            $password = password_hash($post->password, PASSWORD_DEFAULT);
            $this->models->set(['password' => $password])->where(['id' => $this->session->get('user')->id]);
            if ($this->models->update()) {
                return redirect()->to('/akun')->with('success', 'Berhasil mengubah password');
            } else {
                $this->session->setFlashdata('error', 'Kamu belum terdaftar, silahkan daftar terlebih dahulu');
            }
        }

        $data['title'] = 'Lupa Kata Sandi';
        $data['validation'] = ($this->request->getPost()) ? true : false;
        return view('App\Modules\Frontend\Views\Akun\forgot_password', $data);
    }
}
