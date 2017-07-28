<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('usu_id');
            $table->string('Is_admin');
            $table->string('name');
            $table->string('rut')->unique();
            $table->string('usu_ape_pat');
            $table->string('usu_ape_mat');
            $table->string('usu_gen');
            $table->string('usu_nom_carr');
            $table->string('usu_fech_nac');
            $table->string('usu_dir');
            $table->string('usu_tel');
            $table->string('usu_nom_cont_eme');
            $table->string('usu_tel_eme');
            $table->string('email')->unique();
            $table->string('usu_email');
            $table->string('usu_ano_ing');
            $table->string('usu_fech_ins');
            $table->string('password');
            $table->string('password-confirm');
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
}
