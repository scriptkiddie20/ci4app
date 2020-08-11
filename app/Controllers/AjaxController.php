<?php

namespace App\Controllers;

use CodeIgniter\Controllers;
use App\Models\AjaxModel;

class AjaxController extends BaseController
{

    public function index()
    {
        return view('ajaxcrud');
    }

    public function listdata()
    {
        $request = \Config\Services::request();
        $datamodel = new AjaxModel($request);

        if ($request->getMethod(true) == 'POST') {
            $lists = $datamodel->getDatatables();
            $no = $request->getPost("start") + 1;
            $data = [];
            foreach ($lists as $list) {
                $row = [];
                $row[] = $no++;
                $row[] = $list->NamaTeman;
                $row[] = $list->Alamat;
                $row[] = $list->JenisKelamin;
                $row[] = "<a href=\"#\" class=\"btn btn-primary btn-sm\" onclick=\"detail($list->Id)\">Detail</a href=\"#\"> <a href=\"#\" class=\"btn btn-info btn-sm\" onclick=\"edit($list->Id)\">Edit</a href=\"#\"> <a href=\"#\" class=\"btn btn-danger btn-sm\" onclick=\"delete($list->Id)\">Delete</a href=\"#\">";
                $data[] = $row;
            }
            $output = [
                "draw" => $request->getPost('draw'),
                "recordsTotal" => $datamodel->countAll(),
                "recordsFiltered" => $datamodel->countFiltered(),
                "data" => $data
            ];
            echo json_encode($output);
        }
    }

    public function detail($id)
    {
        $model = new AjaxModel();
        $data = $model->ajaxCrud($id);
        dd($data);
    }

    public function tambahData()
    {
        $model = new AjaxModel();
        $data = [];

        $model->save($data);
    }

    public function updateData($id)
    {
        $model = new AjaxModel();
        $data = [];

        $model->save($data);
    }

    //--------------------------------------------------------------------

}
