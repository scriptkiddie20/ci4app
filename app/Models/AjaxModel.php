<?php

namespace App\Models;

use CodeIgniter\Model;

class AjaxModel extends Model
{
    protected $table = 'tbl_teman';

    function getTeman($id = false)
    {
        if ($id == false) {
            $this->join('tbl_jeniskelamin', 'tbl_teman.jk_id = tbl_jeniskelamin.id');
            return $this->findAll();
        } else {
            return $this->getWhere(['id' => $id]);
        }
    }

    function simpanTeman($data)
    {
        $simpan = $this->table($this->table)->insert($data);
        return $simpan;
    }

    function updateTeman($data, $id)
    {
        $update = $this->table($this->table)->update($data, ['id' => $id]);
        return $update;
    }

    function deleteTeman($id)
    {
        $delete = $this->table($this->table)->delete(['id' => $id]);
        return $delete;
    }
}
