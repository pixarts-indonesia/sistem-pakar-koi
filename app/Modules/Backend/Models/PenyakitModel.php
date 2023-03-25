<?php namespace App\Modules\Backend\Models;

use CodeIgniter\Model;

class PenyakitModel extends Model
{
    protected $table      = "penyakit";
    protected $primaryKey = "id";

    protected $returnType     = array();
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'kode_penyakit',
        'nama',
        'solusi',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $useTimestamps = false;
    protected $createdField  = "created_at";
    protected $updatedField  = "updated_a";
    protected $deletedField  ="deleted_at";

    protected $validationRules = [
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

    public function getPenyakit()
    {
        $result[null] = '--Pilih Penyakit--';
        $params = $this->select('kode_penyakit, nama')->get()->getResultArray();
        foreach ($params as $key => $value) {
            $result[$value['kode_penyakit']] = ucwords($value['nama']).' ('.$value['kode_penyakit'].')';
        }

        return $result;
    }

    public function getKodePenyakit()
    {
        $result = (object)$this->orderBy('id', 'DESC')->get()->getRowArray();
        if (isset($result->kode_penyakit)) {
            $result = 'P'.preg_replace("/[^0-9]/", "", $result->kode_penyakit)+1;
        } else {
            $result = 'P1';
        }
        return $result;
    }
}