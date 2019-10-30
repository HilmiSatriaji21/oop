<?php

class Gaji{

    
    public $nama, $nip, $alamat, $jumlah, $ppn = 0.025;

    public function __construct($nama,$nip,$alamat,$jumlah)
    {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->alamat = $alamat;
        $this->jumlah = $jumlah;
                                                        
    }
    public function datadiri()
    {
        return  "Nama Karyawan : $this->nama <br>"
                ."Nip : $this->nip <br>"
                ."alamat : $this->alamat <br>"
                ."jumlah : $this->jumlah <br>";
    }
    public function gakot()
    {
        $gaji_kotor = $this->jumlah * 75000;
        return $gakot;
     
    }
    public function gaber()
    {
        $gaber = $this->gakot() - ($this->gakot() * $this->ppn);
        return $gaber;
    }
}
if (isset($_POST['Simpan'])) {
    $a = $_POST['nama'];
    $b = $_POST['NIP'];
    $c = $_POST['alamat'];
    $d = $_POST['jumlah'];

}

$pegawai = new Gaji($a, $b, $c, $d);
echo $pegawai->datadiri();
echo "Gaji Kotor : " . $pegawai->gakot() . "<br>";
echo "Gaji Bersih : " . $pegawai->gaber() . "<br>";    