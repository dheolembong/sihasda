<?php

namespace App\Models;

use CodeIgniter\Model;

class KehutananModel extends Model
{
  protected $table = 'kehutanan';
  protected $allowedFields = ['hl', 'sa', 'hp_terbatas', 'hp_tetap', 'hp_konversi', 'hutan_perairan'];
}
