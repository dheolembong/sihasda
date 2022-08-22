<?php

namespace App\Models;

use CodeIgniter\Model;

class HortikurturaModel extends Model
{
  protected $table = 'horti';
  protected $allowedFields = ['nama', 'nip', 'ttl', 'alamat', 'jabatan', 'pangkat'];
}
