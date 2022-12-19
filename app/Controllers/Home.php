<?php

namespace App\Controllers;

use App\Models\MenuModel;
use App\Models\KategoriModel;

class Home extends BaseController {

    public function index() {
        $menuModel = new MenuModel();
        $kategoriModel = new KategoriModel();
        
        $data['menu'] = $menuModel->getMenu();
        $data['kategori'] = $kategoriModel->getKategori();
        
        echo view('template/header');
        echo view('home', $data);
        echo view('template/footer');
    }
    
    public function lihatFoto($slug) {
        $menuModel = new MenuModel();
        
        $dataMenu = $menuModel->getMenu($slug);
        $foto = explode(',', $dataMenu->foto);
        
        return $foto;
    }

    //--------------------------------------------------------------------
}
