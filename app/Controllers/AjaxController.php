<?php

namespace App\Controllers;

use App\Models\AjaxModel;
use CodeIgniter\Controller;

class AjaxController extends BaseController
{
    protected $model;
    public function __construct()
    {
        $this->model = new AjaxModel;
    }

    public function index()
    {
        $data = [
            'title' => "Membuat crud dengan ajax Codeigniter",
            'teman' => $this->model->getTeman()
        ];
        return view('ajaxCrud', $data);
    }
}
