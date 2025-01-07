<?php namespace App\Modules\Frontend\Models;

use CodeIgniter\Model;

class HistoriModel extends Model
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
    protected $deletedField  = "deleted_at";

    protected $validationRules = [];

    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function getData($where = false, $array = false)
    {
        if ($where === false)
        {
            return $this->get()->getResultArray();
        }

        if ($array === false) {
            return (object)$this->where($where)->get()->getRowArray();
        }  else {
            return $this->where($where)->get()->getResultArray();
        }

    }
}