<?php

namespace App\Controllers;

use App\Models\PopulasiModel;
use App\Models\ProduksiDagingModel;
use App\Models\TelursusuModel;
use Config\Validation;

class Peternakan extends BaseController
{
  protected $populasiModel;
  protected $produksidagingModel;
  protected $telursusuModel;
  public function __construct()
  {
    $this->populasiModel = new PopulasiModel();
    $this->produksidagingModel = new ProduksiDagingModel();
    $this->telursusuModel = new TelursusuModel();
  }
  public function index()
  {
    $data = [
      'title' => 'Data Peternakan | SIHASDA SULUT',

    ];
    echo view('layout/header', $data);
    echo view('layout/sidebar');
    echo view('layout/topbar');
    echo view('peternakan/peternakan');
    echo view('layout/footer');
  }
  public function populasi()
  {
    $populasi = $this->populasiModel->findall();

    $data = [
      'title' => 'Data Populasi | SIHASDA SULUT',
      'populasi' => $populasi
    ];
    echo view('layout/header', $data);
    echo view('layout/sidebar');
    echo view('layout/topbar');
    echo view('peternakan/populasi');
    echo view('layout/footer');
    if (empty($data['populasi'])) {
      throw new \CodeIgniter\Exceptions\PageNotFoundException('Data tidak ditemukan');
    }
  }


  public function create_populasi()
  {

    $data = [
      'title' => 'Form Tambah Data Populasi | SIHASDA SULUT',
      'validation' => \Config\Services::validation()
    ];
    echo view('layout/header', $data);
    echo view('layout/sidebar');
    echo view('layout/topbar');
    echo view('peternakan/create_populasi');
    echo view('layout/footer');
  }

  public function produksi_daging()
  {
    $produksidaging = $this->produksidagingModel->findall();

    $data = [
      'title' => 'Data Produksi Daging | SIHASDA SULUT',
      'produksidaging' => $produksidaging
    ];
    echo view('layout/header', $data);
    echo view('layout/sidebar');
    echo view('layout/topbar');
    echo view('peternakan/produksi_daging');
    echo view('layout/footer');
    if (empty($data['populasi'])) {
      throw new \CodeIgniter\Exceptions\PageNotFoundException('Data tidak ditemukan');
    }
  }
  public function create_produksi_daging()
  {

    $data = [
      'title' => 'Form Tambah Data Produksi Daging | SIHASDA SULUT',
      'validation' => \Config\Services::validation()
    ];
    echo view('layout/header', $data);
    echo view('layout/sidebar');
    echo view('layout/topbar');
    echo view('peternakan/create_produksi_daging');
    echo view('layout/footer');
  }

  public function telur_susu()
  {
    $telursusu = $this->telursusuModel->findall();

    $data = [
      'title' => 'Data Telur dan Susu | SIHASDA SULUT',
      'telursusu' => $telursusu
    ];
    echo view('layout/header', $data);
    echo view('layout/sidebar');
    echo view('layout/topbar');
    echo view('peternakan/telur_susu');
    echo view('layout/footer');
    if (empty($data['telur_susu'])) {
      throw new \CodeIgniter\Exceptions\PageNotFoundException('Data tidak ditemukan');
    }
  }

  public function create_telur_susu()
  {

    $data = [
      'title' => 'Form Tambah Data Telur dan Susu | SIHASDA SULUT',
      'validation' => \Config\Services::validation()
    ];
    echo view('layout/header', $data);
    echo view('layout/sidebar');
    echo view('layout/topbar');
    echo view('peternakan/create_telur_susu');
    echo view('layout/footer');
  }

  public function populasi_save()
  {
    // validasi input
    if (!$this->validate([
      'tahun' => [
        'rules' => 'required',
        'errors' => [
          'required' => ' harus diisi.'
        ]
      ],
      'sapi_perah' => [
        'rules' => 'required',
        'errors' => [
          'required' => ' harus diisi.'
        ]
      ],

      'sapi_potong' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'harus diisi.',
        ]
      ],

      'kuda' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'harus diisi.'
        ]
      ],
      'kambing' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'harus diisi.'
        ]
      ],
      'babi' => [
        'rules' => 'required',
        'errors' => [
          'required' => ' harus diisi.'
        ]
      ],
      'ayam' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'harus diisi.'
        ]
      ],
      'bebek' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'harus diisi.'
        ]
      ]

    ])) {
      $validation = \Config\Services::validation();

      return redirect()->to('peternakan/create_populasi')->withInput()->with('validation', $validation);
    }
    $this->populasiModel->populasi_save([

      'tahun' => $this->request->getVar('tahun'),
      'sapi_perah' => $this->request->getVar('sapi_perah'),
      'sapi_potong' => $this->request->getVar('sapi_potong'),
      'kuda' => $this->request->getVar('kuda'),
      'kambing' => $this->request->getVar('kambing'),
      'babi' => $this->request->getVar('babi'),
      'ayam' => $this->request->getVar('ayam'),
      'bebek' => $this->request->getVar('bebek')
    ]);
    session()->setFlashdata('pesan', 'Data berhasil ditambahkan !');

    return redirect()->to('peternakan/populasi');
  }



  public function produksi_daging_save()
  {
    // validasi input
    if (!$this->validate(
      [
        'tahun' => [
          'rules' => 'required',
          'errors' => [
            'required' => ' harus diisi.'
          ]
        ],
        'sapi' => [
          'rules' => 'required',
          'errors' => [
            'required' => ' harus diisi.'
          ]
        ],
        'kambing' => [
          'rules' => 'required',
          'errors' => [
            'required' => ' harus diisi.'
          ]
        ],
        'babi' => [
          'rules' => 'required',
          'errors' => [
            'required' => ' harus diisi.'
          ]
        ],
        'ayam_kampung' => [
          'rules' => 'required',
          'errors' => [
            'required' => ' harus diisi.'
          ]
        ],
        'ayam_petelur' => [
          'rules' => 'required',
          'errors' => [
            'required' => ' harus diisi.'
          ]
        ],
        'bebek' => [
          'rules' => 'required',
          'errors' => [
            'required' => ' harus diisi.'
          ]
        ]
      ]

    )) {
      $validation = \Config\Services::validation();

      return redirect()->to('peternakan/create_produksi_daging')->withInput()->with('validation', $validation);
    }

    $this->produksidagingModel->produksidaging_save([

      'tahun' => $this->request->getVar('tahun'),
      'sapi' => $this->request->getVar('sapi'),
      'kambing' => $this->request->getVar('kambing'),
      'babi' => $this->request->getVar('babi'),
      'ayam_kampung' => $this->request->getVar('ayam_kampung'),
      'ayam_petelur' => $this->request->getVar('ayam_petelur'),
      'bebek' => $this->request->getVar('bebek')

    ]);

    session()->setFlashdata('pesan', 'Data berhasil ditambahkan !');

    return redirect()->to('peternakan/produksi_daging');
  }

  public function telur_susu_save()
  {
    // validasi input
    if (!$this->validate(
      [
        'tahun' => [
          'rules' => 'required',
          'errors' => [
            'required' => ' harus diisi.'
          ]
        ],
        'sapi_perah' => [
          'rules' => 'required',
          'errors' => [
            'required' => ' harus diisi.'
          ]
        ],
        'ayam_kampung' => [
          'rules' => 'required',
          'errors' => [
            'required' => ' harus diisi.'
          ]
        ],
        'ayam_petelur' => [
          'rules' => 'required',
          'errors' => [
            'required' => ' harus diisi.'
          ]
        ],
        'bebek' => [
          'rules' => 'required',
          'errors' => [
            'required' => ' harus diisi.'
          ]
        ]
      ]

    )) {
      $validation = \Config\Services::validation();

      return redirect()->to('peternakan/create_telur_susu')->withInput()->with('validation', $validation);
    }

    $this->telursusuModel->telur_susu_save([

      'tahun' => $this->request->getVar('tahun'),
      'sapi_perah' => $this->request->getVar('sapi'),
      'ayam_kampung' => $this->request->getVar('ayam_kampung'),
      'ayam_petelur' => $this->request->getVar('ayam_petelur'),
      'bebek' => $this->request->getVar('bebek')

    ]);

    session()->setFlashdata('pesan', 'Data berhasil ditambahkan !');

    return redirect()->to('peternakan/telur_susu');
  }
}
