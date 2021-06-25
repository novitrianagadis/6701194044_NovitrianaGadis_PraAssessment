<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Paket extends Seeder
{
	public function run()
	{
		//
		$paket_data = [
			[
				'id_paket' 			=> '01',
				'tanggal_datang'    => '2021-01-01',
				'tanggal_ambil'     => '2021-01-05',
				'isi_paket'			=> 'buku',
				'penghuni'			=> '012344',
				'penerima'			=> '020'
			]
		];
		foreach ($paket_data as $data) {
			// insert semua data ke tabel
			$this->db->table('Paket')->insert($data);
		}
	}
}
