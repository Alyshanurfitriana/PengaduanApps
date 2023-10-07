<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    //set Tabel
    protected $table ="pengaduan";

    //set primary key
    protected $primarykey ="id_pengaduan";

    //set auto increment
    public $incrementing =false;

    //set tipe data primary key
    protected $keytype ="string";

    //string kolom yang dapat di isi secara masals
    protected $guarded = [];
}


