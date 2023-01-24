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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('kode', 25);
            $table->char('nis', 20)->nullable();
            $table->string('fullname', 125);
            $table->string('username', 50)->unique();
            $table->string('password');
            $table->string('kelas', 50)->nullable();
            $table->text('alamat')->nullable();
            $table->string('verif', 50)->nullable();
            $table->enum('role', ['admin', 'user']);
            $table->datetime('join_date');
            $table->datetime('terakhir_login')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
