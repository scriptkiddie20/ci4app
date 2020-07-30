<?php

namespace App\Models;

use CodeIgniter\Model;

class ResiModel extends Model
{
    protected $table = 'resi';
    protected $allowedFields = ['cs_id', 'customer', 'noresi', 'orders'];

    function getResi()
    {
        $this->table;
        $this->select('*');
        $resi = $this->join('cs', 'cs.id = resi.cs_id');
        return $resi->get();
    }
}
