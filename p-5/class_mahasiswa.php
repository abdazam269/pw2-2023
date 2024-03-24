<?php 

class mahasiswa 
{
    public $namaMahasiswa, $nim, $domisili, $prodi, $ipk;

    function __construct($namaMahasiswa, $nim, $domisili, $prodi, $ipk)
    {
        $this ->namaMahasiswa = $namaMahasiswa;
        $this ->nim = $nim;
        $this ->domisili = $domisili;
        $this ->prodi = $prodi;
        $this ->ipk = $ipk;

    }

    function setPredikatIPK($ipk)
    {
        if ($ipk > 3.5) {
            echo "cumlaude";
        }
        else {
            echo "haha";
        }
    }
}
$mahasiswa = new Mahasiswa ("azam", "564", "bogor", "TI", "3.9");
echo "nama lengkap :" . $mahasiswa->namaMahasiswa;
echo "<br>";
echo "nim :" . $mahasiswa->nim; 
echo "<br>"; 
echo "domisili :". $mahasiswa->domisili;
echo "<br>"; 
echo "prodi :" . $mahasiswa->prodi;
echo "<br>"; 
echo "IPK :". $mahasiswa->ipk;
echo "<br>"; 
$mahasiswa->setPredikatIPK($mahasiswa->ipk);
?>