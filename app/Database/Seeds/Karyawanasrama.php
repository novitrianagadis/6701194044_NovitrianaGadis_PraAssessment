<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Karyawanasrama extends Seeder
{
	public function run()
	{
		//
		$karyawan_data = [
			[
				'nip_karyawan' => '020',
				'nama_karyawan'    => 'Anisa Rahma'
			],
			[
				'nip_karyawan' => '021',
				'nama_karyawan'    => 'Novitriana Gadis'
			]
		];
		foreach ($karyawan_data as $data) {
			// insert semua data ke tabel
			$this->db->table('Karyawanasrama')->insert($data);
		}
	}
}
