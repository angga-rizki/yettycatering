<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends Model {

    protected $table = 'menu';
    protected $primaryKey = 'id_menu';
    protected $allowedFields = ['id_menu', 'kategori', 'nama', 'harga', 'body', 'thumbnail', 'foto', 'slug'];

    public function getMenu($slug = false) {
        if ($slug === false) {
            return $this->asObject()->findAll();
        }

        return $this->asObject()
                        ->where(['slug' => $slug])
                        ->first();
    }
}
