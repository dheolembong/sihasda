<?php

namespace App\Models;

use CodeIgniter\Model;

class PegawaiModel extends Model
{
  protected $table = 'pegawai';
  protected $allowedFields = ['nama', 'nip', 'ttl', 'alamat', 'jabatan', 'pangkat'];
}
