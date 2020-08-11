<?php

namespace App\Models;

use CodeIgniter\Model;

class AjaxModel extends Model
{
    protected $table = 'tb_teman';
    protected $column_search = ['NamaTeman', 'Alamat', 'JenisKelamin'];
    protected $column_order = [null, 'NamaTeman', 'Alamat', 'JenisKelamin'];
    protected $order = ['NamaTeman' => 'asc'];
    protected $request;
    protected $db;
    protected $dt;

    public function __construct($request)
    {
        $this->db = db_connect();
        $this->request = $request;

        $this->dt = $this->db->table($this->table);
    }

    public function ajaxCrud($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id' => $id]);
        }
    }

    private function _getDatatables()
    {
        $request = $this->request;

        // searching
        $i = 0;
        foreach ($this->column_search as $search) {
            if ($i === 0) {
                $this->dt->groupStart();
                $this->dt->like($search, $request->getPost('search')['value']);
            } else {
                $this->dt->orLike($search, $request->getPost('search')['value']);
            }

            if (count($this->column_search) - 1 == $i) {
                $this->dt->groupEnd();
            }
            $i++;
        }

        // ordering
        if ($request->getPost('order')) {
            $this->dt->orderBy($this->column_order[$request->getPost('order')['0']['column']], $request->getPost('order')['0']['dir']);
        } else if ($this->order) {
            $order = $this->order;
            $this->dt->orderBy(key($order), $order[key($order)]);
        }
    }

    function getDatatables()
    {
        $this->_getDatatables();
        $request = $this->request;

        if ($request->getPost('length') != -1) {
            $this->dt->limit($request->getPost('length'), $request->getPost('start'));
            $query = $this->dt->get();
            return $query->getResult();
        }
    }

    function countAll()
    {
        return $this->dt->countAllResults();
    }

    function countFiltered()
    {
        $this->_getDatatables();
        return $this->dt->countAllResults();
    }
}
