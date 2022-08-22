<?php

namespace App\Controllers;

use App\Models\HortikurturaModel;
use Config\Validation;

class Hortikurtura extends BaseController
{
  protected $hortikurturaModel;
  public function __construct()
  {
    $this->hortikurturaModel = new HortikurturaModel();
  }

  public function index()
  {
    $hortikurtura = $this->hortikurturaModel->findall();

    $data = [
      'title' => 'Data Hortikurtura | SIHASDA SULUT',
      'hortikurtura' => $hortikurtura
    ];
    echo view('layout/header', $data);
    echo view('layout/sidebar');
    echo view('layout/topbar');
    echo view('hortikurtura/hortikurtura');
    echo view('layout/footer');
    if (empty($data['hortikurtura'])) {
      throw new \CodeIgniter\Exceptions\PageNotFoundException('Data tidak ditemukan');
    }
  }

  public function create_horti()
  {

    $data = [
      'title' => 'Form Tambah Data Pegawai | SIHASDA SULUT',
      'validation' => \Config\Services::validation()
    ];
    echo view('layout/header', $data);
    echo view('layout/sidebar');
    echo view('layout/topbar');
    echo view('hortikurtura/create_horti');
    echo view('layout/footer');
  }

  public function save()
  {
    // validasi input
    if (!$this->validate([
      'nama' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'Nama harus diisi.'
        ]
      ],

      'nip' => [
        'rules' => 'required|numeric',
        'errors' => [
          'required' => 'NIP harus diisi.',
          'numeric' => 'Harus berisi angka.'
        ]
      ],

      'ttl' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'Tempat/Tanggal Lahir harus diisi.'
        ]
      ],
      'alamat' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'Alamat harus diisi.'
        ]
      ],
      'jabatan' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'Jabatan harus diisi.'
        ]
      ],
      'pangkat' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'Pangkat/Golongan harus diisi.'
        ]
      ]

    ])) {
      $validation = \Config\Services::validation();

      return redirect()->to('pegawai/create_pegawai')->withInput()->with('validation', $validation);
    }

    $this->pegawaiModel->save([

      'nama' => $this->request->getVar('nama'),
      'nip' => $this->request->getVar('nip'),
      'ttl' => $this->request->getVar('ttl'),
      'alamat' => $this->request->getVar('alamat'),
      'jabatan' => $this->request->getVar('jabatan'),
      'pangkat' => $this->request->getVar('pangkat')
    ]);

    session()->setFlashdata('pesan', 'Data berhasil ditambahkan !');

    return redirect()->to('/pegawai');
  }
}
