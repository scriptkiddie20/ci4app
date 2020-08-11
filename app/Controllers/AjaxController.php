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
                $row[] = "<a href=\"/ajaxcontroller/detail/$list->Id\" class=\"btn btn-primary btn-sm\">Detail</a> <button class=\"btn btn-info btn-sm\" onclick=\"edit_barang($list->Id)\">Edit</button> <button class=\"btn btn-danger btn-sm\" onclick=\"delete($list->Id)\">Delete</button>";
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
        echo json_encode($data);
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

    public function deleteData($id)
    {
        $model = new AjaxModel();
        $model->delete($id);
    }

    //--------------------------------------------------------------------

}
