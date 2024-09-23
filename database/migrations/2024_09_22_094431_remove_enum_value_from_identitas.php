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
        // Hapus kolom yang ada dan buat kembali dengan nilai enum yang baru
        Schema::table('identitas', function (Blueprint $table) {
            // Hapus kolom
            $table->dropColumn('jenis_kelamin');
        });

        Schema::table('identitas', function (Blueprint $table) {
            // Tambahkan kolom dengan enum yang baru
            $table->enum('jenis_kelamin', ['PEREMPUAN'])->nullable(); // Ganti sesuai kebutuhan
        });
    }

    public function down()
    {
        // Kembalikan kolom ke kondisi sebelumnya
        Schema::table('identitas', function (Blueprint $table) {
            $table->enum('jenis_kelamin', ['LAKI-LAKI', 'PEREMPUAN'])->nullable(); // Kembalikan ke enum awal
        });
    }
};
