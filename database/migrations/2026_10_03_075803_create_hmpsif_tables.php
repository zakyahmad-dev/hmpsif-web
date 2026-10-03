<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pengurus', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 120);
            $table->string('jabatan', 100);
            $table->string('divisi', 80);
            $table->text('deskripsi')->nullable();
            $table->string('foto')->nullable();
            $table->timestamps();
        });

        Schema::create('program_kerja', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 160);
            $table->string('divisi', 80)->nullable();
            $table->text('deskripsi')->nullable();
            $table->string('status', 30)->nullable();
            $table->integer('tahun')->nullable();
            $table->string('waktu', 100)->nullable();
            $table->string('tempat', 150)->nullable();
            $table->string('banner')->nullable();
            $table->text('detail')->nullable();
            $table->timestamps();
        });

        Schema::create('kegiatan', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 160);
            $table->date('tanggal')->nullable();
            $table->string('lokasi', 150)->nullable();
            $table->text('deskripsi')->nullable();
            $table->string('status', 30)->nullable();
            $table->string('poster')->nullable();
            $table->timestamps();
        });

        Schema::create('berita', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 200);
            $table->string('penulis', 120)->nullable();
            $table->date('tanggal')->nullable();
            $table->string('kategori', 60)->nullable();
            $table->text('ringkasan')->nullable();
            $table->string('thumbnail')->nullable();
            $table->longText('isi')->nullable();
            $table->timestamps();
        });

        Schema::create('galeri', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 160)->nullable();
            $table->string('foto')->nullable();
            $table->string('kegiatan', 160)->nullable();
            $table->integer('tahun')->nullable();
            $table->timestamps();
        });

        Schema::create('pendaftaran', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 120);
            $table->string('nim', 40);
            $table->string('semester', 20);
            $table->string('kelas', 30);
            $table->string('whatsapp', 30);
            $table->string('email', 120);
            $table->string('divisi', 80);
            $table->text('alasan');
            $table->boolean('agree')->default(true);
            $table->enum('status', ['Pending', 'Diproses', 'Diterima', 'Ditolak'])->default('Pending');
            $table->timestamps();
        });

        Schema::create('kontak', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 120);
            $table->string('email', 120);
            $table->string('subjek', 160);
            $table->text('pesan');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kontak');
        Schema::dropIfExists('pendaftaran');
        Schema::dropIfExists('galeri');
        Schema::dropIfExists('berita');
        Schema::dropIfExists('kegiatan');
        Schema::dropIfExists('program_kerja');
        Schema::dropIfExists('pengurus');
    }
};