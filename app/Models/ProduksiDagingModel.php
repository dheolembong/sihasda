<?php

namespace App\Models;

use CodeIgniter\Model;

class ProduksiDagingModel extends Model
{
  protected $table = 'produksi_daging';
  protected $allowedFields = ['tahun', 'sapi', 'kambing', 'babi', 'ayam_kampung', 'ayam_petelur', 'bebek'];
}
