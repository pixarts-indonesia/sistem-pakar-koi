<?php
namespace App\Modules\Frontend\Controllers;

use CodeIgniter\Controller;
use Config\Services;
use App\Modules\Frontend\Models\DiagnosaModel;
use App\Models\GejalaModel;
use App\Modules\Backend\Models\PenyakitModel;
use App\Models\MasterBobotModel;

class Diagnosa extends Controller
{
    protected $session;

    function __construct()
    {
        $this->session = Services::session();
        $this->session->start();
        $this->request = Services::request();
        $this->models = new DiagnosaModel;
        $this->gejala = new GejalaModel;
        $this->penyakit = new PenyakitModel;
        $this->master_bobot = new MasterBobotModel;
    }

    public function index()
    {
        if (!$this->session->get('user')) {
            return redirect()->to('login')->with('error', 'Login terlebih dahulu');
        }
        if (!empty($_POST)) {
            $result = $this->models->process($_POST);
            $data = (object)[
                'kode_histori' => $this->models->generateKode(),
                'penyakit' => json_encode(array_keys($result)),
                'gejala' => json_encode(array_keys($_POST)),
                'nilai' => json_encode(array_values($result)),
                'created_by' => $this->session->get('user')->id
            ];
            if ($this->models->save($data)) {
                $histori = $this->models->getData(['kode_histori' => $data->kode_histori]);
                $_data = (object)$this->models->getDataHistori($histori);
                $this->penyakit->save((object)[
                    'kode_penyakit' => $this->penyakit->getKodePenyakit(),
                    'nama' => join(', ', $_data->penyakit['nama']),
                    'solusi' => join(', ', $_data->penyakit['solusi']),
                ]);
                return redirect()->to("/diagnosa/hasil/$data->kode_histori")->with('info', 'Diagnosa Berhasil');
            }
            return redirect()->to('/diagnosa')->with('error', 'Diagnosa Gagal');
        }
        $data['gejala'] = $this->gejala->getData();
        $data['master_bobot'] = $this->master_bobot->getData();
        $data['title'] = 'Diagnosa';
        $data['main'] = true;

        return view('App\Modules\Frontend\Views\Diagnosa\index', $data);
    }

    public function hasil($params = NULL)
    {
        if (!$this->session->get('user')) {
            return redirect()->to('login')->with('error', 'Login terlebih dahulu');
        }
        $histori = $this->models->getData(['kode_histori' => $params]);
        $data['hasil'] = $this->models->getDataHistori($histori);
        $data['title'] = 'Hasil Diagnosa';
        $data['main'] = true;

        return view('App\Modules\Frontend\Views\Diagnosa\hasil', $data);
    }
}
