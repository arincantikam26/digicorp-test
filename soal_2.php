<?php 

class Nilai {
    private $mapel, $nilai;

    public function __construct($mapel, $nilai) {
        $this->mapel = $mapel;
        $this->nilai = $nilai;
    }
    public function getMapel(){
        return $this->mapel;
    }

    public function getNilai(){
        return $this->nilai;
    } 
}

class Siswa {
    private $nrp, $nama, $daftarNilai = array();
  
    public function setNama($value) {
        $this->nama = $value;
    }
    public function getNama() {
        return $this->nama;
    }
    public function setDaftarNilai($mapel, $nilai){
        $nilaiObj = new Nilai($mapel, $nilai);
        $this->daftarNilai[] = $nilaiObj;
    }
    public function getDaftarNilai(){
        return $this->daftarNilai;
    }
}

// Fungsi untuk menghasilkan random string
function generateRandomString($length = 10) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}


$yaha = new Siswa();
$yaha->setDaftarNilai('inggris', 100);

$siswaArray = array();
 
$listMapel = ["inggris", "indonesia", "jepang"];

for($i = 0; $i < 10; $i++ ) {
    $randNama = generateRandomString(10);
    $randNilai = rand(0,100);
    $randMapel = array_rand($listMapel);

    $siswa_baru = new Siswa();
    
    $siswa_baru->setNama($randNama);
    $siswa_baru->setDaftarNilai($listMapel[$randMapel], $randNilai);

    $siswaArray[] = $siswa_baru;

}

// Menampilkan hasil
foreach ($siswaArray as $siswa) {
    echo "Nama Siswa: {$siswa->getNama()}\n";
    foreach ($siswa->getDaftarNilai() as $nilai) {
        echo "Mapel: {$nilai->getMapel()} , Nilai: {$nilai->getNilai()}\n";
    }
    echo "<br>";
}



?>