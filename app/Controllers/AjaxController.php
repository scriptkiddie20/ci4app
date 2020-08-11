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

    function getTeman()
    {
        $data = $this->model->getTeman();
        echo json_encode($data);
    }

    function simpanTeman()
    {
        $data = [

        ];
        $this->model->simpanTeman($data);
    }

    function updateTeman()
    {
        $id = $this->request->getPost();
        $data = [

        ];
        $this->model->updateTeman($data, $id)
    }

    function deleteTeman()
    {
        $id = $this->request->getPost();
        $this->model->deleteTeman($id);
    }
}
