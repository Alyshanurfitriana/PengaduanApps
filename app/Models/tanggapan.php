<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tanggapan extends Model
{
    use HasFactory;

    //set Tabel
    protected $table ="tanggapan";

    //set primary key
    protected $primarykey ="id_tanggapan";

    //set auto increment
    public $incrementing =false;

    //set tipe data primary key
    protected $keytype ="string";

    //string kolom yang dapat di isi secara masal
    protected $guarded = [];
}
