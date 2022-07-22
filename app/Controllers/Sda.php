<?php

namespace App\Controllers;


class Sda extends BaseController
{
  public function ptn()
  {
    $data = [
      'title' => 'Data Pertanian | SIHASDA SULUT'
    ];
    echo view('layout/header', $data);
    echo view('layout/sidebar');
    echo view('layout/topbar');
    echo view('sda/pertanian');
    echo view('layout/footer');
  }
  public function ptkn()
  {
    $data = [
      'title' => 'Data Peternakan | SIHASDA SULUT'
    ];
    echo view('layout/header', $data);
    echo view('layout/sidebar');
    echo view('layout/topbar');
    echo view('sda/peternakan');
    echo view('layout/footer');
  }
  public function kltn()
  {
    $data = [
      'title' => 'Data Kelautan | SIHASDA SULUT'
    ];
    echo view('layout/header', $data);
    echo view('layout/sidebar');
    echo view('layout/topbar');
    echo view('sda/kelautan');
    echo view('layout/footer');
  }
  public function pikan()
  {
    $data = [
      'title' => 'Data Perikanan | SIHASDA SULUT'
    ];
    echo view('layout/header', $data);
    echo view('layout/sidebar');
    echo view('layout/topbar');
    echo view('sda/perikanan');
    echo view('layout/footer');
  }
  public function ptmbg()
  {
    $data = [
      'title' => 'Data Pertambangan | SIHASDA SULUT'
    ];
    echo view('layout/header', $data);
    echo view('layout/sidebar');
    echo view('layout/topbar');
    echo view('sda/pertambangan');
    echo view('layout/footer');
  }
  public function lh()
  {
    $data = [
      'title' => 'Data Lingkungan Hidup | SIHASDA SULUT'
    ];
    echo view('layout/header', $data);
    echo view('layout/sidebar');
    echo view('layout/topbar');
    echo view('sda/lingkungan_hidup');
    echo view('layout/footer');
  }
  public function energi()
  {
    $data = [
      'title' => 'Data Energi | SIHASDA SULUT'
    ];
    echo view('layout/header', $data);
    echo view('layout/sidebar');
    echo view('layout/topbar');
    echo view('sda/energi');
    echo view('layout/footer');
  }
  public function air()
  {
    $data = [
      'title' => 'Data Air | SIHASDA SULUT'
    ];
    echo view('layout/header', $data);
    echo view('layout/sidebar');
    echo view('layout/topbar');
    echo view('sda/air');
    echo view('layout/footer');
  }
}
