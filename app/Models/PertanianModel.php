<?php

namespace App\Models;

use CodeIgniter\Model;

class PertanianModel extends Model
{
  protected $table = 'pertanian';
  protected $allowedFields = ['tahun', 'luas_panen', '', 'produktivitas', 'produksi', 'padi', 'beras'];
}
