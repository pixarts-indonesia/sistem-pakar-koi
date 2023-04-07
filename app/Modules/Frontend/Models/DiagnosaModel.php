<?php namespace App\Modules\Frontend\Models;

use CodeIgniter\Model;

class DiagnosaModel extends Model
{
    protected $table      = "histori";
    protected $primaryKey = "id";

    protected $returnType     = array();
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        'kode_histori',
        'penyakit',
        'gejala',
        'nilai',
        'created_by',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    protected $useTimestamps = false;
    protected $createdField  = "created_at";
    protected $updatedField  = "updated_a";
    protected $deletedField  ="deleted_at";

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function getData($where = false)
    {
        if ($where === false)
        {
            return $this->orderBy('id', 'ASC')->get()->getResultArray();
        }

        return (object)$this->where($where)->get()->getRowArray();
    }

    private $nilai, $total_bobot, $total;

    public function process($data)
    {
        $rules = $this->getRules();
        foreach ($rules as $key => $value) {
            foreach ($data as $k => $va) {
                if ($value['kode_gejala'] === $k) {
                    if (!isset($this->nilai[$value['kode_penyakit']])) {
                        $this->nilai[$value['kode_penyakit']] = (int)$value['nilai_bobot']*(float)$va;
                    } else {
                        $this->nilai[$value['kode_penyakit']] += (int)$value['nilai_bobot']*(float)$va;
                    }
                }
            }
            if (!isset($this->total_bobot[$value['kode_penyakit']])) {
                $this->total_bobot[$value['kode_penyakit']] = (int)$value['nilai_bobot'];
            } else {
                $this->total_bobot[$value['kode_penyakit']] += (int)$value['nilai_bobot'];
            }
        }
        foreach ($this->nilai as $key => $value) {
            $this->total[$key] = round(($value/$this->total_bobot[$key])*100, 0);
        }

        return $this->sortData();
    }

    public function getRules()
    {
        $query = $this->db->table('rules')
                      ->select('*')
                      ->get();
        return $query->getResultArray();
    }

    public function generateKode()
    {
        return 'DIK'.rand(1, 9).date('yjdGis').rand(0, 9);
    }

    public function sortData()
    {
        $_data = [];
        $i = 0;
        arsort($this->total);
        foreach ($this->total as $key => $value) {
            if ($i < 2) {
                $_data[$key] = $value;
            }
            $i++;
        }
        return $_data;
    }

    public function getDataHistori($params)
    {
        $_data['penyakit'] = $this->getPenyakit(json_decode($params->penyakit));
        $_data['gejala'] = $this->getGejala(json_decode($params->gejala));
        $_data['nilai'] = json_decode($params->nilai);
        return $_data;
    }

    public function getPenyakit($params) {
        $i = 0;
        foreach ($params as $key => $value) {
            $penyakit = $this->db->table('penyakit')
                      ->select('*')
                      ->where(['kode_penyakit' => $value])
                      ->get()->getResultArray();
            $_data['nama'][$i] = $penyakit[0]['nama'];
            $_data['img'][$i] = $penyakit[0]['img'];
            $_data['solusi'][$i] = $penyakit[0]['solusi'];
            $i++;
        }
        return $_data;
    }

    public function getGejala($params) {
        foreach ($params as $key => $value) {
            $gejala = $this->db->table('gejala')
                      ->select('*')
                      ->where(['kode_gejala' => $value])
                      ->get()->getResultArray();
            $_data[$key] = $gejala[0]['nama'];
        }
        return $_data;
    }
}