<?php

namespace App\Controllers;

use App\Controllers\M_Karyawanasrama as ControllersM_Karyawanasrama;
use CodeIgniter\Controller;
use App\Models\M_Karyawanasrama;

class karyawanasrama extends Controller
{
    public function __construct()
    {
        $this->model = new M_Karyawanasrama();
    }

    public function index()
    {


        $data = [
            'judul' => 'Data Karyawan',
            'karyawanasrama' => $this->model->getAllData()

        ];

        echo view('templates/v_header', $data);
        echo view('templates/v_sidebar');
        echo view('templates/v_topbar');

        echo view('karyawanasrama/index');
        echo view('templates/v_footer');
    }
    public function tambah()
    {
        if (isset($_POST['tambah'])) {
            $val = $this->validate([
                'nip_karyawan' => 'required',
                'nama_karyawan' => 'required'

            ]);

            if (!$val) {

                session()->setFlashdata('err', \Config\Services::validation()->listErrors());

                $data = [
                    'judul' => 'Data Karyawan',
                    'karyawanasrama' => $this->model->getAllData()
                ];

                echo view('templates/v_header', $data);
                echo view('templates/v_sidebar');
                echo view('templates/v_topbar');
                echo view('karyawanasrama/index', $data);
                echo view('templates/v_footer');
            } else {
                $data = [
                    'nip_karyawan' => $this->request->getPost('nip_karyawan'),
                    'nama_karyawan' => $this->request->getPost('nama_karyawan'),

                ];

                $success = $this->model->tambah($data);
                if ($success) {
                    session()->setFlashdata('message', 'Ditambahkan');
                    return redirect()->to(base_url('karyawanasrama'));
                }
            }
        } else {
            return redirect()->to('/karyawanasrama');
        }
    }
    public function hapus($nip_karyawan)
    {
        $success = $this->model->hapus($nip_karyawan);
        if ($success) {
            session()->setFlashdata('message', 'Dihapus');
            return redirect()->to(base_url('karyawanasrama'));
        }
    }
    public function ubah()
    {
        if (isset($_POST['ubah'])) {
            $val = $this->validate([
                'nip_karyawan' => 'required',
                'nama_karyawan' => 'required',


            ]);

            if (!$val) {

                session()->setFlashdata('err', \Config\Services::validation()->listErrors());

                $data = [
                    'judul' => 'Data Pencocokan',
                    'karyawanasrama' => $this->model->getAllData()
                ];

                echo view('templates/v_header', $data);
                echo view('templates/v_sidebar');
                echo view('templates/v_topbar');
                echo view('karyawanasrama/index', $data);
                echo view('templates/v_footer');
            } else {
                $nip_karyawan = $this->request->getPost('nip_karyawan');
                $data = [
                    'nip_karyawan' => $this->request->getPost('nip_karyawan'),
                    'nama_karyawan' => $this->request->getPost('nama_karyawan'),

                ];

                $success = $this->model->ubah($data, $nip_karyawan);
                if ($success) {
                    session()->setFlashdata('message', 'Diubahkan');
                    return redirect()->to(base_url('karyawanasrama'));
                }
            }
        } else {
            return redirect()->to('/karyawanasrama');
        }
    }
}
