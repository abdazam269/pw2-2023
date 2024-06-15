<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelurahan extends Model
{
    use HasFactory;
    protected $table = "kelurahans"; //nama table yg digunakan
    //kolom yang dapat disisi di kelurahan
    protected $fillable = [
        'nama', 
        'kecamatan_id', 
    ];
//nonaktifkan timestamps
public $timestamps = false;
}
