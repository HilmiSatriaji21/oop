<?php
class Keluarga{
    public $nama, $nik, $alamat, $umur;

    public function __construct($nama, $nik, $alamat, $umur)
    {
        $this->nama = $nama;
        $this->nik = $nik;
        $this->alamat = $alamat;
        $this->umur = $umur;
    }
    public function datadiri()
    {
        foreach ($this->nama as $data => $x) {
            echo "Nama : " .$this->nama[$data] .
            ", Nik : " .$this->nik[$data] .
            ", Alamat : " .$this->alamat[$data] .
            ", Umur : " .$this->umur[$data]."<br>";
        }
    }
}
if (isset($_POST['sbm'])) {
    $a = $_POST['nama'];
    $b = $_POST['nik'];
    $c = $_POST['alamat'];
    $d = $_POST['umur'];

$Family = new Keluarga($a,$b,$c,$d);
echo $Family->datadiri() . "<br>";
}
?>