<?php
namespace App\Modules\Frontend\Controllers;

use CodeIgniter\Controller;
use App\Modules\Frontend\Models\HomeModel;

class Home extends Controller
{
    protected $session;

    function __construct()
    {
        $this->session = \Config\Services::session();
        $this->session->start();
    }
    public function index()
    {
        $data['title'] = 'Home';
        echo view('\App\Modules\Frontend\Views\Home\index', $data);
    }
}
