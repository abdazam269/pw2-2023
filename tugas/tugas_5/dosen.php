<?php

class dosen 
{
    public $nama_dosen;

    function __construct($nama_dosen)
    {
        $this->nama_dosen = $nama_dosen;
    }

    public function nama($mk) 
    {
        $nama_dosen = '';
        switch ($mk) {
            case 'pemrograman web 2':
                $nama_dosen = 'Dr. Sirojul Munir, S.Si., M.Kom.';
                break;
            case 'komunikasi efektif':
                $nama_dosen = 'Dalias, S.IP., M.E.';
                break;
            case 'statistika  dan probabilitas':
                $nama_dosen = 'Ahmad Rio Adriansyah, S.Si., M.Si.';
                break;
            default:
                $nama_dosen = 'Dosen tidak ditemukan';
                break;
        }
        return $nama_dosen;
    }
}



$nama_dosen_objek = new dosen('');
$nama_dosen = $nama_dosen_objek->nama($mk);

echo "Dosen: " . $nama_dosen;

?>
