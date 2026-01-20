<?php 
require_once 'app/Models/Pelanggan.php';

class PelangganController {
    public function daftarPelanggan(){
        $pelanggan = new Pelanggan();
        $data = $pelanggan->tampilkanSemuaPelanggan();
        require 'app/Views/pelanggan_view.php';
    }
}
?>