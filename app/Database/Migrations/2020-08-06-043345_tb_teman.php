<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class tb_teman extends Migration
{
	public function up()
	{


		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'NamaTeman'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'Alamat' 		  => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'JenisKelamin'    => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'created_at' 		  => [
				'type'           => 'DATETIME',
				'null'     		 => true,
			],
			'updated_at' 		 => [
				'type'           => 'DATETIME',
				'null'     		 => true,
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('tb_teman');
	}

	public function down()
	{
		$this->forge->dropTable('tb_teman', true);
	}
}
