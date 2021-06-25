<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Penghuni extends Seeder
{
	public function run()
	{
		//
		$penghuni_data = [
			[
				'no_ktp' 			=> '012344',
				'nama_penghuni'     => 'Fillona Darhien',
				'unit'				=> 'A15',
				'foto'				=> 'tidak ada'
			]
		];
		foreach ($penghuni_data as $data) {
			// insert semua data ke tabel
			$this->db->table('Penghuni')->insert($data);
		}
	}
}
