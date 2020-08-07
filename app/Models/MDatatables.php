<?php

// namespace App\Models;

// use CodeIgniter\Model;

// class MDatatables extends Model
// {
//     protected $table = "tb_teman";
//     protected $column_search = array('NamaTeman', 'Alamat', 'JenisKelamin');
//     protected $column_order = array(null, 'NamaTeman', 'Alamat', 'JenisKelamin');
//     protected $order = array('NamaTeman' => 'asc');
//     protected $request;
//     protected $db;
//     protected $dt;

//     function __construct($request)
//     {
//         parent::__construct();
//         $this->db = db_connect();
//         $this->request = $request;

//         $this->dt = $this->db->table($this->table);
//     }


//     private function _get_datatables_query()
//     {
//         // Column Search
//         $i = 0;
//         foreach ($this->column_search as $item) {
//             if ($this->request->getPost('search')['value']) {
//                 if ($i === 0) {
//                     $this->dt->groupStart();
//                     $this->dt->like($item, $this->request->getPost('search')['value']);
//                 } else {
//                     $this->dt->orLike($item, $this->request->getPost('search')['value']);
//                 }
//                 if (count($this->column_search) - 1 == $i)
//                     $this->dt->groupEnd();
//             }
//             $i++;
//         }

//         // Column Order
//         if ($this->request->getPost('order')) {
//             $this->dt->orderBy($this->column_order[$this->request->getPost('order')['0']['column']], $this->request->getPost('order')['0']['dir']);
//         } else if (isset($this->order)) {
//             $order = $this->order;
//             $this->dt->orderBy(key($order), $order[key($order)]);
//         }
//     }

//     // tampilkan datatables
//     function get_datatables()
//     {
//         $this->_get_datatables_query();
//         if ($this->request->getPost('length') != -1);
//         $this->dt->limit($this->request->getPost('length'), $this->request->getPost('start'));
//         $query = $this->dt->get();
//         return $query->getResult();
//     }

//     // jumlah filtered
//     function count_filtered()
//     {
//         $this->_get_datatables_query();
//         return $this->dt->countAllResults();
//     }

//     // jumlah semuanya
//     public function count_all()
//     {
//         $tbl_storage = $this->db->table($this->table);
//         return $tbl_storage->countAllResults();
//     }
// }


namespace App\Models;

use CodeIgniter\Model;

class MDatatables extends Model
{
}
