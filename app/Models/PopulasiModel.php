<?php

namespace App\Models;

use CodeIgniter\Model;

class PopulasiModel extends Model
{
  protected $table = 'populasi';
  protected $allowedFields = ['tahun', 'sapi_perah', 'sapi_potong', 'kuda', 'kambing', 'babi', 'ayam_kampung', 'bebek'];
}
