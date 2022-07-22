<?php

namespace App\Controllers;

use App\Models\KehutananModel;
use Config\Validation;

class Kehutanan extends BaseController
{
  protected $kehutananModel;
  public function __construct()
  {
    $this->kehutananModel = new kehutananModel();
  }
  public function index()
  {

    $kehutanan = $this->kehutananModel->findall();

    $data = [
      'title' => 'Data Kehutanan | SIHASDA SULUT',
      'kehutanan' => $kehutanan
    ];
    echo view('layout/header', $data);
    echo view('layout/sidebar');
    echo view('layout/topbar');
    echo view('kehutanan/kehutanan');
    echo view('layout/footer');

    if (empty($data['kehutanan'])) {
      throw new \CodeIgniter\Exceptions\PageNotFoundException('Data tidak ditemukan');
    }
  }
  public function create_kehut()
  {

    $data = [
      'title' => 'Form Tambah Data Kehutanan | SIHASDA SULUT',
      'validation' => \Config\Services::validation()
    ];
    echo view('layout/header', $data);
    echo view('layout/sidebar');
    echo view('layout/topbar');
    echo view('kehutanan/create_kehut');
    echo view('layout/footer');
  }

  public function save()
  {
    // validasi input
    if (!$this->validate(
      [
        'hl' => [
          'rules' => 'required',
          'errors' => [
            'required' => 'harus diisi'
          ]
        ],

        'sa' => [
          'rules' => 'required',
          'errors' => [
            'required' => 'harus diisi'
          ]
        ],

        'hp_terbatas' => [
          'rules' => 'required',
          'errors' => [
            'required' => 'harus diisi'
          ]
        ],
        'hp_tetap' => [
          'rules' => 'required',
          'errors' => [
            'required' => 'harus diisi'
          ]
        ],
        'hp_konversi' => [
          'rules' => 'required',
          'errors' => [
            'required' => 'harus diisi'
          ]
        ],
        'hutan_perairan' => [
          'rules' => 'required',
          'errors' => [
            'required' => 'harus diisi'
          ]
        ]
      ]
    )) {
      $validation = \Config\Services::validation();

      return redirect()->to('kehutanan/create_kehut')->withInput()->with('validation', $validation);
    }


    $this->kehutananModel->save([

      'hl' => $this->request->getVar('hl'),
      'sa' => $this->request->getVar('sa'),
      'hp_terbatas' => $this->request->getVar('hp_terbatas'),
      'hp_tetap' => $this->request->getVar('hp_tetap'),
      'hp_konversi' => $this->request->getVar('hp_konversi'),
      'hutan_perairan' => $this->request->getVar('hutan_perairan ')
    ]);

    session()->setFlashdata('pesan', 'Data berhasil ditambahkan !');

    return redirect()->to('/kehutanan');
  }
}
