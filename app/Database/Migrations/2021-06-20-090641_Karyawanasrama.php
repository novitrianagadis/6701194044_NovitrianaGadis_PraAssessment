<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Karyawanasrama extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'nip_karyawan'          => [
				'type'           => 'INT',
				'constraint'     => 11,
			],
			'nama_karyawan'    => [
				'type'       => 'VARCHAR',
				'constraint' => '50',
			],
		]);
		$this->forge->addPrimaryKey('nip_karyawan', true);
		$this->forge->createTable('Karyawanasrama');
	}

	public function down()
	{
		//
		$this->forge->dropTable('Karyawanasrama');
	}
}
