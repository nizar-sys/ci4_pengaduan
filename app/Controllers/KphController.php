<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\KphModel;

class KphController extends BaseController
{
    public function __construct()
    {
        $this->kphModel = new KphModel();
        $this->db = \Config\Database::connect();
    }

    public function index()
    {
        $data = [
            'user' => $this->user,
            'title' => 'Daftar Getah',
            'dataKph' => $this->kphModel->getKph(),
        ];
        return view('kph/index', $data);
    }

    public function tambah()
    {
        $data = [
            'user' => $this->user,
            'title' => 'Input Daftar Getah',
            'validation' => $this->validation
        ];
        return view('kph/input_getah', $data);
    }
}