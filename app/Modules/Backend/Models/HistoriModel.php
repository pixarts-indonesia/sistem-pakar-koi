<?php namespace App\Modules\Backend\Models;

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
            return $this->get()->getResultArray();
        }

        return (object)$this->where($where)->get()->getRowArray();
    }
}