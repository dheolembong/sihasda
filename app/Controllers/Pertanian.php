<?php

namespace App\Controllers;

use App\Models\PertanianModel;
use App\Models\HortikurturaModel;
use Config\Validation;

class Pertanian extends BaseController
{
  protected $pertanianModel;
  public function __construct()
  {
    $this->pertanianModel = new PertanianModel();
  }
  public function index()
  {

    $pertanian = $this->pertanianModel->findall();

    $data = [
      'title' => 'Data pertanian | SIHASDA SULUT',
      'pertanian' => $pertanian
    ];
    echo view('layout/header', $data);
    echo view('layout/sidebar');
    echo view('layout/topbar');
    echo view('pertanian/pertanian');
    echo view('layout/footer');
    if (empty($data['pertanian'])) {
      throw new \CodeIgniter\Exceptions\PageNotFoundException('Data tidak ditemukan');
    }
  }


  public function create_pertanian()
  {

    $data = [
      'title' => 'Form Tambah Data pertanian | SIHASDA SULUT',
      'validation' => \Config\Services::validation()
    ];
    echo view('layout/header', $data);
    echo view('layout/sidebar');
    echo view('layout/topbar');
    echo view('pertanian/create_pertanian');
    echo view('layout/footer');
  }

  public function save()
  {
    // validasi input
    if (!$this->validate(
      [
        'tahun' => [
          'rules' => 'required',
          'errors' => [
            'required' => 'harus diisi'
          ]
        ],

        'luas_panen' => [
          'rules' => 'required',
          'errors' => [
            'required' => 'harus diisi'
          ]
        ],

        'produktivitas' => [
          'rules' => 'required',
          'errors' => [
            'required' => 'harus diisi'
          ]
        ],
        'produksi' => [
          'rules' => 'required',
          'errors' => [
            'required' => 'harus diisi'
          ]
        ],
        'padi' => [
          'rules' => 'required',
          'errors' => [
            'required' => 'harus diisi'
          ]
        ],
        'beras' => [
          'rules' => 'required',
          'errors' => [
            'required' => 'harus diisi'
          ]
        ]
      ]
    )) {
      $validation = \Config\Services::validation();

      return redirect()->to('pertanian/create_pertanian')->withInput()->with('validation', $validation);
    }


    $this->pertanianModel->save([

      'hl' => $this->request->getVar('tahun'),
      'sa' => $this->request->getVar('luas_panen'),
      'hp_terbatas' => $this->request->getVar('produktivitas'),
      'hp_tetap' => $this->request->getVar('produksi'),
      'hp_konversi' => $this->request->getVar('padi'),
      'hutan_perairan' => $this->request->getVar('beras')
    ]);

    session()->setFlashdata('pesan', 'Data berhasil ditambahkan !');

    return redirect()->to('/pertanian');
  }
}
