<?php

class NilaiMahasiswa
{
    public $nim, $mk, $nilai;

    function __construct($nim, $mk, $nilai)
    {
        $this->nim = $nim;
        $this->mk = $mk;
        $this->nilai = $nilai;
    }

    public function NIM()
    {
        return $this->nim;
    }

    public function MataKuliah()
    {
       return  $this->mk;
    }

    public function Nilai()
    {
       return $this->nilai;
    }

    public function grade()
    {
        if ($this->nilai >= 60) {
            return "LULUS";
        } elseif ($this->nilai >= 80 && $this->nilai <= 90) {
            return "Memuaskan";
        } elseif ($this->nilai >= 70 && $this->nilai < 80) {
            return "Cukup";
        } elseif ($this->nilai >= 60 && $this->nilai < 70) {
            return "Kurang";
        } else {
            return "Tidak Lulus";
        }
    }
    
    public function hasil()
    {
        if ($this->nilai >= 90) {
            return "A";
        } elseif ($this->nilai >= 80 && $this->nilai < 90) {
            return "B";
        } elseif ($this->nilai >= 70 && $this->nilai < 80) {
            return "C";
        } else {
            return "Tidak Lulus";
        }
    
    }
}

if (isset($_POST["submit"])) {
    $nim = $_POST["nim"];
    $mk = $_POST["mk"];
    $nilai = $_POST["nilai"];

    // Membuat objek NilaiMahasiswa berdasarkan data dari form.php
    $nilai_mahasiswa = new NilaiMahasiswa($nim, $mk, $nilai);

    // Menampilkan output nilai mahasiswa
    echo "NIM: " . $nilai_mahasiswa->NIM() . "<br>";
    echo "Nama Mata Kuliah: " . $nilai_mahasiswa->MataKuliah() . "<br>";
    echo "Nilai: " . $nilai_mahasiswa->Nilai() . "<br>";
    echo "Hasil Ujian: " . $nilai_mahasiswa->hasil() . "<br>";
    echo "Grade: " . $nilai_mahasiswa->grade();
}
?>
