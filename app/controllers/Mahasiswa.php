<?php 

class Mahasiswa extends Controllers{
    public function index(){
        $data['judul'] = 'Daftar Mahasiswa';
        $this->view('templates/header');
        $this->view('mahasiswa/index');
        $this->view('templates/footer');
    }
}

?>