<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pengaduan',function(Blueprint $table){
            $table->integer('id_pengaduan');
            $table->date('tgl_pengaduan');
            $table->char('nik',16)->primary();
            $table->text('isi_laporan');
            $table->char('foto',225);
            $table->enum('status',['0','proses','selesai']);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('pengaduan');
    }
};
