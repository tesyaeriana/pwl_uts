<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal', function (Blueprint $table) {
            $table->id();
            $table->string('kode_jadwal',10)->unique();
            $table->string('nama_pemilik', 25)->nullable();
            $table->string('nama_peliharaan', 25)->nullable();
            $table->string('layanan', 25)->nullable();
            $table->date('tgl_msk')->nullable();
            $table->date('tgl_klr')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwal');
    }
};
