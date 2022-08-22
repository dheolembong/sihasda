<?php

namespace App\Models;

use CodeIgniter\Model;

class TelurSusuModel extends Model
{
  protected $table = 'telur_susu';
  protected $allowedFields = ['tahun', 'sapi_perah', 'ayam_kampung', 'ayam_petelur', 'bebek'];
}
