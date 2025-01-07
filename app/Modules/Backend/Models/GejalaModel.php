<?php namespace App\Modules\Backend\Models;

use CodeIgniter\Model;

class GejalaModel extends Model
{
    protected $table      = "gejala";
    protected $primaryKey = "id";

    protected $returnType     = array();
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'kode_gejala',
        'nama',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $useTimestamps = false;
    protected $createdField  = "created_at";
    protected $updatedField  = "updated_a";
    protected $deletedField  ="deleted_at";

    protected $validationRules    = [
        'nama' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Nama tidak boleh kosong'
            ]
        ],
    ];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function getData($where = false)
    {
        if ($where === false)
        {
            return $this->get()->getResultArray();
        }

        return (object)$this->where($where)->get()->getRowArray();
    }

    public function getGejala()
    {
        $result[null] = '--Pilih Gejala--';
        $params = $this->select('kode_gejala, nama')->get()->getResultArray();
        foreach ($params as $key => $value) {
            $result[$value['kode_gejala']] = ucwords($value['nama']).' ('.$value['kode_gejala'].')';
        }

        return $result;
    }

    public function getKodeGejala()
    {
        $result = (object)$this->orderBy('id', 'DESC')->get()->getRowArray();
        if (isset($result->kode_gejala)) {
            $kode = preg_replace("/[^0-9]/", "", $result->kode_gejala)+1;
            $result = 'G'.$kode;
        } else {
            $result = 'G1';
        }
        return $result;
    }
}