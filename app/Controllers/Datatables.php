<?php

namespace App\Controllers;

use CodeIgniter\Controllers;
use App\Models\MDatatables;

class Datatables extends BaseController
{

    public function index()
    {
        return view('index_datatables');
    }

    public function listdata()
    {
        $request = \Config\Services::request();
        $datamodel = new MDatatables($request);

        if ($request->getMethod(true) == 'POST') {
            $lists = $datamodel->get_datatables();
            $no = $request->getPost("start") + 1;
            $data = [];
            foreach ($lists as $list) {
                $row = [];
                $row[] = $no++;
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
