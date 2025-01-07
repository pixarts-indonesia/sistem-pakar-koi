<?php
namespace App\Modules\Frontend\Controllers;

use CodeIgniter\Controller;
use Config\Services;
use App\Modules\Frontend\Models\RespondenModel;
use App\Modules\Frontend\Models\HistoriRespondenModel;

class Responden extends Controller
{
    protected $session;

    function __construct()
    {
        helper(['url', 'form']);
        $this->session = Services::session();
        $this->session->start();
        $this->request = Services::request();
        $this->validation = Services::validation();
        $this->models = new RespondenModel;
        $this->modelsHistoriResponden = new HistoriRespondenModel;
    }

    public function index()
    {
        if (!$this->session->get('user')) {
            return redirect()->to('login')->with('error', 'Login terlebih dahulu');
        }
        $this->validation->setRules($this->models->validationRules);
        $validation = $this->validation->withRequest($this->request)->run();
        $data['models'] = $this->models->getData();
        $post = $this->request->getPost();
        if ($post && count($post) == count($data['models'])) {
            $params['params'] = json_encode($post);
            $params['jumlah'] = array_sum($post);
            $params['nilai'] = $params['jumlah']*2.5;
            $params['created_by'] = $this->session->get('user')->id;
            if ($this->modelsHistoriResponden->save((object)$params)) {
                return redirect()->to('/responden')->with('success', "Terimakasih sudah mengisih responden");
            }
            return redirect()->to('/responden')->with('error', 'Terjadi masalah silahkan ulang beberapa saat lagi');
        }

        $data['title'] = 'Responden';
        $data['validation'] = ($post && count($post) != count($data['models'])) ? true : false;
        $data['main'] = true;
        return view('App\Modules\Frontend\Views\Responden\index', $data);
    }
}
