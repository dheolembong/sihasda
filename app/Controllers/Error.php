<?php

namespace App\Controllers;

class Error extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Error | SIHASDA SULUT'
    ];
    echo view('layout/header', $data);
    echo view('layout/sidebar');
    echo view('layout/topbar');
    echo view('error/404');
    echo view('layout/footer');
  }
}
  ?>