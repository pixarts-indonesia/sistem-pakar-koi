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
    protected $encryption;
    protected $models;
    
    function __construct()
    {
        helper(['url', 'form']);
        $this->session = Services::session();
        $this->session->start();
        $this->request = Services::request();
        $this->validation = Services::validation();
        $this->encryption = Services::encrypter();
        $this->models = new AuthModel;
    }

    public function login()
    {
        $this->validation->setRules($this->models->validationRulesLogin);
        $validation = $this->validation->withRequest($this->request)->run();
        if (!$validation) {
            $data['title'] = 'Login';
            $data['validation'] = ($this->request->getPost()) ? true : false;
            $data['params'] = (object)$this->request->getPost();
            return view('App\Modules\Frontend\Views\Auth\login', $data);
        } else {
            $post = (object)$this->request->getPost();
            $test = $this->models->where(['username' => $post->username])->get()->getRowArray();
            print_r($this->encryption->decrypt($test['password']));
            exit;
            // $this->session->set('user', $post);
            return redirect()->to('/')->with('info', 'Selamat datang, kamu berhasil login');
        }
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
            $params = [
                'nama' => $post->nama,
                'username' => $post->username,
                'email'  => $post->email,
                'telp'  => $post->telp,
                'alamat'  => $post->alamat,
                'password'  => $this->encryption->encrypt($post->password),
            ];
            if ($this->models->save($params)) {
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
