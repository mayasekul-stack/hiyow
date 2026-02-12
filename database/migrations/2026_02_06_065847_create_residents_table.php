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
        Schema::create('residents', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->enum('jenis_tamu', ['warga', 'instansi', 'lainnya']);
            $table->string('asal_desa', 100)->nullable();
            $table->string('asal_instansi', 150)->nullable();
            $table->text('address');
            $table->string('keperluan', 150)->nullable();
            $table->string('no_hp', 15)->nullable();
            $table->date('tgl_kjgn');
            $table->string('jam_kjgn')->nullable();
            $table->enum('status', ['menunggu', 'diproses', 'selesai'])
             ->default('menunggu');
            $table->string('petugas', 100)->nullable();
            $table->text('catatan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('residents');
    }
};
