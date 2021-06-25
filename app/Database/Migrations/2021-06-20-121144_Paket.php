<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Paket extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'id_paket'          => [
				'type'           => 'INT',
				'constraint'     => 11,
			],
			'tanggal_datang'    => [
				'type'       => 'DATE',
			],
			'tanggal_ambil'    => [
				'type'       => 'DATE',
			],
			'isi_paket'    => [
				'type'       => 'VARCHAR',
				'constraint' => '50',
			],
			'penghuni'    => [
				'type'       => 'INT',
				'constraint' => 11,
			],
			'penerima'    => [
				'type'       => 'INT',
				'constraint' => 11,
			],
		]);
		$this->forge->addPrimaryKey('id_paket', true);
		$this->forge->addForeignKey('penghuni', 'Penghuni', 'no_ktp');
		$this->forge->addForeignKey('penerima', 'Karyawanasrama', 'nip_karyawan');
		$this->forge->createTable('Paket');
	}

	public function down()
	{
		//
		$this->forge->dropTable('Paket');
	}
}
