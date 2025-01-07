<?php
namespace App\Modules\Backend\Controllers;

use CodeIgniter\Controller;
use Config\Services;
use App\Modules\Backend\Models\HistoriRespondenModel;
use App\Modules\Backend\Models\RespondenModel;

class HistoriResponden extends Controller
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
        $this->models = new HistoriRespondenModel;
        $this->modelsResponden = new RespondenModel;
    }

    public function index()
    {
        if (!$this->session->get('admin')) {
            return redirect()->to('admin/login')->with('error', 'Login terlebih dahulu');
        }

        $data['title'] = 'Hasil Responden';
        $data['models'] = $this->models->getData();
        $data['modelsResponden'] = $this->modelsResponden->getData();
        $data['jumlahResponden'] = count($data['models']);
        $data['jumlah'] = array_sum(array_column($data['models'], 'nilai'));
        $data['sus'] = $data['jumlah']/$data['jumlahResponden'];
        $data['main'] = true;
        return view('App\Modules\Backend\Views\HistoriResponden\index', $data);
    }

    public function delete($id)
    {
        if ($this->models->delete($id)) {
            return redirect()->to('admin/hasil-responden')->with('success', "Data berhasil dihapus");
        } else {
            return redirect()->to('admin/hasil-responden')->with('error', 'Terjadi masalah silahkan ulang beberapa saat lagi');            
        }
    }
}
