<?php

namespace App\Models;

use CodeIgniter\Model;

class KphModel extends Model
{
    protected $table = 'tbl_kph';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'id',
        'tanggal',
        'uraian',
        'nama_penyadap',
        'petak',
        'luas',
        'jml_pohon',
        'realisasi',
        'keterangan',
    ];

    public function getKph()
    {
        return $this->get()->getRowArray();
    }
}
