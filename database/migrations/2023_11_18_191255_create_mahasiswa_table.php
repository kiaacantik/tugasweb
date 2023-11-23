<?php

// database/migrations/xxxx_xx_xx_create_mahasiswa_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaTable extends Migration
{
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('nim', 10)->unique();
            $table->string('nama_lengkap', 35);
            $table->string('tempat_lahir', 20);
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin', 10);
            $table->text('alamat');
            $table->string('program_studi', 29);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mahasiswa');
    }
}
