<?php

namespace App\Controllers;

class Pages extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Home | SIHASDA SULUT'
    ];
    echo view('layout/header', $data);
    echo view('layout/sidebar');
    echo view('layout/topbar');
    echo view('pages/konten');
    echo view('layout/footer');
  }

  public function struktur()
  {
    $data = [
      'title' => 'Struktur Biro | SIHASDA SULUT'
    ];
    echo view('layout/header', $data);
    echo view('layout/sidebar');
    echo view('layout/topbar');
    echo view('pages/struktur');
    echo view('layout/footer');
  }


  public function charts()
  {
    $data = [
      'title' => 'Charts | SIHASDA SULUT'
    ];
    echo view('layout/header', $data);
    echo view('layout/sidebar');
    echo view('layout/topbar');
    echo view('pages/charts');
    echo view('layout/footer');
  }
}
