<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Penghuni extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'no_ktp'          => [
				'type'           => 'INT',
				'constraint'     => 11,
			],
			'nama_penghuni'    => [
				'type'       => 'VARCHAR',
				'constraint' => '50',
			],
			'unit'    => [
				'type'       => 'VARCHAR',
				'constraint' => '20',
			],
			'foto'    => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
		]);
		$this->forge->addPrimaryKey('no_ktp', true);
		$this->forge->createTable('Penghuni');
	}

	public function down()
	{
		//
		$this->forge->dropTable('Penghuni');
	}
}
