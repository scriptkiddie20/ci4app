<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ResiModel;
use CodeIgniter\Database\Config;

class Resi extends BaseController
{
    public function index()
    {
        $message = "Cicih";
        $db = \Config\Database::connect();
        $builder = $db->table('resi')->join('cs', 'cs.id = resi.cs_id');
        $builder->where(['customer' => $message])->orderBy('resi.id', 'DESC')->get();

        dd($builder->getResult());

        $app_name = $_POST['app'];
        $sender   = $_POST['sender'];
        $message  = $_POST['message'];

        if ($app_name) {
            if ($sender) {
                if ($message) {
                    if ($message == 'cek resi') {
                        $reply = ['reply' => "Resi atas nama siapa kak ?"];
                    }

                    $reply = array('reply' => "Hello");
                    echo json_encode($reply);
                }
            }
        }
    }
}
