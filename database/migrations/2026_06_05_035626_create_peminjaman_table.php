<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migration.
     */
    public function up(): void
    {
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();

            $table->foreignId('buku_id')
                ->constrained('buku')
                ->onDelete('cascade');

            $table->string('nama_peminjam')->default('Sigma');

            $table->date('tanggal_pinjam');
            $table->date('jatuh_tempo');
            $table->date('tanggal_kembali')->nullable();

            $table->integer('denda')->default(0);

            $table->enum('status', [
                'dipinjam',
                'selesai',
                'terlambat'
            ])->default('dipinjam');

            $table->timestamps();
        });
    }

    /**
     * Batalkan migration.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman');
    }
};