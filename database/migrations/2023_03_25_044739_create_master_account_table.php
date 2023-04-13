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
        Schema::create('master_account', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_status');
            $table->string('nama');
            $table->char('jenisKelamin', '10');
            $table->string('noHp')->default('0');
            $table->string('alamat')->default('Null');
            $table->string('username',100)->unique();
            $table->string('password');
            $table->foreign('id_status')
                ->references('id')->on('status_user')->onDelete('cascade');
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
        Schema::dropIfExists('master_account');
    }
};
