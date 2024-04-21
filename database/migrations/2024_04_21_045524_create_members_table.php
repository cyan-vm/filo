<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            // $table->increments('iduser');
            $table->id();
            $table->string('name', 45);
            $table->string('lastName', 45);
            $table->string('maternalName', 45)->nullable();
            $table->tinyInteger('sex');
            $table->string('email', 45);
            $table->string('password', 64)->nullable();
            $table->string('profile_image', 100)->nullable();
            // $table->integer('rol_idrol')->unsigned();
            $table->timestamps();

            // $table->index('rol_idrol');
            // $table->foreign('rol_idrol')->references('idrol')->on('rol')
            //       ->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}

