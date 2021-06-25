<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Karyawanasrama extends Model
{
    protected $table = 'karyawanasrama';

    public function __construct()
    {

        $this->db = db_connect();
        $this->builder = $this->db->table($this->table);
    }

    public function getAllData()
    {
        return $this->db->table('karyawanasrama')->get()->getResultArray();
    }

    public function tambah($data)
    {
        return $this->db->table('karyawanasrama')->insert($data);
    }
    public function hapus($nip_karyawan)
    {
        return $this->db->table('karyawanasrama')->delete(['nip_karyawan' => $nip_karyawan]);
    }
    public function ubah($data, $nip_karyawan)
    {
        return $this->builder->update($data, ['nip_karyawan' => $nip_karyawan]);
    }
}
