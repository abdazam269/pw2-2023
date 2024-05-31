<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
    use HasFactory;
    protected $table = "pasiens"; //nama table yg digunakan
    //kolom yang dapat disisi di pasien
    protected $fillable = [
        "kode",
        "nama",
        "tmp_lahir",
        "tgl_lahir",
        "gender",
        "email",
        "alamat",
    ];
//nonaktifkan timestamps
public $timestamps = false;
}
