<?php

namespace App\Controllers;

use CodeIgniter\Controllers;
use App\Models\MDatatables;
use Config\Services;

class Datatables extends BaseController
{
    public function index()
    {
        return view('index_datatables');
    }

    public function listdata()
    {
        $request = Services::request();
        $datamodel = new MDatatables($request);
        if ($request->getMethod(true) == 'POST') {
            $lists = $datamodel->get_datatables();
            $data = [];
            $no = $request->getPost("start");
            foreach ($lists as $list) {
                $no++;
                $row = [];
                $row[] = $no;
                $row[] = $list->NamaTeman;
                $row[] = $list->Alamat;
                $row[] = $list->JenisKelamin;
                $data[] = $row;
            }
            $output = [
                "draw" => $request->getPost('draw'),
                "recordsTotal" => $datamodel->count_all(),
                "recordsFiltered" => $datamodel->count_filtered(),
                "data" => $data
            ];
            echo json_encode($output);
        }
    }

    //--------------------------------------------------------------------

}
