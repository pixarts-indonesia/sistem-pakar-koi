<?php
namespace App\Modules\Frontend\Controllers;

use CodeIgniter\Controller;
use Config\Services;
use App\Modules\Frontend\Models\DiagnosaModel;
use App\Models\GejalaModel;
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
        $this->master_bobot = new MasterBobotModel;
    }

    public function index()
    {
        if (!$this->session->get('user')) {
            return redirect()->to('login')->with('error', 'Login terlebih dahulu');
        }
        if (!empty($_POST)) {
            $result = $this->models->process($_POST);
            $data = [
                'kode_histori' => $this->models->generateKode(),
                'gejala' => json_encode(array_keys($_POST))
            ];
            print_r($result);
            exit;
        }
        $data['gejala'] = $this->gejala->getData();
        $data['master_bobot'] = $this->master_bobot->getData();
        $data['title'] = 'Diagnosa';
        $data['main'] = true;

        return view('App\Modules\Frontend\Views\Diagnosa\index', $data);
    }
}
