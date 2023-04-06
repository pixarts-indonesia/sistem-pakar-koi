<?php namespace App\Modules\Frontend\Models;

use CodeIgniter\Model;

class DiagnosaModel extends Model
{
    protected $table      = "histori";
    protected $primaryKey = "id";

    protected $returnType     = array();
    protected $useSoftDeletes = true;

    protected $allowedFields = [];

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

        return arsort($this->total);
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
}