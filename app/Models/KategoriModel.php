<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model {

    protected $table = 'kategori';
    protected $primaryKey = 'nama_kategori';
    protected $allowedFields = ['nama_kategori'];

    public function getKategori() {
        return $this->asObject()->orderBy('urutan', 'ASC')->findAll();
    }
}
