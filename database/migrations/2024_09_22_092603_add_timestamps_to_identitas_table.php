<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('identitas', function (Blueprint $table) {
            // Ubah nama field 'rt' menjadi 'rt_rw'
            $table->renameColumn('rt', 'rt_rw');
    
            // Hapus field 'rw'
            $table->dropColumn('rw');
    
            // Ubah tipe data 'rt_rw' menjadi VARCHAR(255)
            $table->string('rt_rw', 255)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('identitas', function (Blueprint $table) {
            // Kembalikan nama field 'rt_rw' menjadi 'rt'
            $table->renameColumn('rt_rw', 'rt');

            // Tambahkan kembali field 'rw'
            $table->string('rw')->nullable(); // Sesuaikan dengan tipe dan nullable jika diperlukan

            // Ubah tipe data 'rt' kembali jika diperlukan
            $table->integer('rt')->change(); // Sesuaikan dengan tipe sebelumnya
        });
    }
};
