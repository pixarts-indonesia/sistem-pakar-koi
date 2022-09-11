<?php namespace App\Modules\Backend\Models;

use CodeIgniter\Model;

class RulesModel extends Model
{
    protected $table      = "rules";
    protected $primaryKey = "id";

    protected $returnType     = array();
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'kode_rules',
        'kode_penyakit',
        'kode_gejala',
        'nilai_bobot',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $useTimestamps = false;
    protected $createdField  = "created_at";
    protected $updatedField  = "updated_a";
    protected $deletedField  = "deleted_at";

    protected $validationRules = [
        'kode_penyakit' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Penyakit tidak boleh kosong'
            ]
        ],
        'kode_gejala' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Gejala tidak boleh kosong'
            ]
        ],
        'nilai_bobot' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Nilai bobot tidak boleh kosong'
            ]
        ],
    ];

    protected $validationRulesUpdate = [
        'nilai_bobot' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Nilai bobot tidak boleh kosong'
            ]
        ],
    ];

    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function getData($where = false)
    {
        if ($where === false)
        {
            return $this->select('
                *, penyakit.nama AS nama_penyakit,
                gejala.nama AS nama_gejala,
                rules.id AS rules_id,
                rules.kode_penyakit AS rules_penyakit,
                rules.kode_gejala AS rules_gejala
            ')
            ->join('penyakit', 'rules.kode_penyakit = penyakit.kode_penyakit')
            ->join('gejala', 'rules.kode_gejala = gejala.kode_gejala')
            ->orderBy('length(rules.kode_rules), rules.kode_rules', 'ASC')
            ->orderBy('length(rules.kode_penyakit), rules.kode_penyakit', 'ASC')
            ->orderBy('length(rules.kode_gejala), rules.kode_gejala', 'ASC')
            ->get()->getResultArray();
        }

        return (object)$this->select('
            *, penyakit.nama AS nama_penyakit,
            gejala.nama AS nama_gejala,
            rules.id AS rules_id,
            rules.kode_penyakit AS rules_penyakit,
            rules.kode_gejala AS rules_gejala
        ')
        ->join('penyakit', 'rules.kode_penyakit = penyakit.kode_penyakit')
        ->join('gejala', 'rules.kode_gejala = gejala.kode_gejala')
        ->where($where)->get()->getRowArray();
    }

    public function getRules()
    {
        $result[null] = '--Pilih Kode Rules--';
        $params = $this->select('kode_rules')->get()->getResultArray();
        foreach ($params as $key => $value) {
            $result[$value['kode_rules']] = $value['kode_rules'];
        }

        return $result;
    }

    public function getKodeRules()
    {
        $result = (object)$this->orderBy('LENGTH(kode_rules), kode_rules', 'DESC')->get()->getRowArray();
        $result = 'R'.preg_replace("/[^0-9]/", "", $result->kode_rules)+1;
        return $result;
    }

    public function deleteRules($id)
    {
        $query = $this->delete(array('customer_id' => $id));
        return $query;
    }
}