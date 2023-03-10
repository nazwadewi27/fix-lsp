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
        Schema::create('pesans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('penerima_id')->constrained('users');
            $table->foreignId('pengirim_id')->constrained('users');
            $table->string('judul', 50);
            $table->text('isi');
            $table->enum('status' , ['terkirim','dibaca', 'belum dibaca']);
            $table->date('tanggal_terkirim');
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
        Schema::dropIfExists('pesans');
    }
};
