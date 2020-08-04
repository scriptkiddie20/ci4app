<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\OrangModel;

class Orang extends BaseController
{

    protected $OrangModel;
    public function __construct()
    {
        $this->OrangModel = new OrangModel();
    }

    public function index()
    {
        $data = [
            'title' => "Daftar Orang",
            'orang' => $this->OrangModel->paginate(6),
            'pager' => $this->OrangModel->pager
            // 'orang' => $this->OrangModel->findAll()
        ];

        return view('orang/index', $data);
    }
}
