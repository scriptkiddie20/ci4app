<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TblJeniskelamin extends Migration
{
	public function up()
	{
		$forge = \Config\Database::forge();

		$forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'kelamin'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'created_at' => [
				'type'           => 'DATETIME',
				'null'           => true,
			],
			'updated_at' => [
				'type'           => 'DATETIME',
				'null'           => true,
			],
		]);
		$forge->addKey('id', true);
		$forge->createTable('tbl_jeniskelamin');
	}

	public function down()
	{
		$this->forge->dropTable('tbl_jeniskelamin');
	}
}
