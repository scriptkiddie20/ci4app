<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TblTeman extends Migration
{
	public function up()
	{
		//
		$forge = \Config\Database::forge();

		$forge->addField([
			"id"	=> [
				"type" => 'INT',
				"constraint" => '11',
				"unsigned" => true,
				"auto_increment" => true
			],
			"namateman"	=> [
				"type" => 'VARCHAR',
				"constraint" => '100',
			],
			"alamat"	=> [
				"type" => 'VARCHAR',
				"constraint" => '100',
			],
			"jk_id"	=> [
				"type" => 'INT',
				"constraint" => '11',
			],
			"created_at"	=> [
				"type" => 'DATETIME',
				"null" => true,
			],
			"updated_at"	=> [
				"type" => 'DATETIME',
				"null" => true
			],
		]);
		$forge->addKey('id', true);
		$forge->createTable('tbl_teman');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->addForeignKey('jk_id', 'tbl_jeniskelamin', 'id');
		$this->forge->dropTable('tbl_teman');
	}
}
