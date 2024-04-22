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
        Schema::create('alumn', function (Blueprint $table) {
            $table->id('idalumn');
            $table->string('enrollment', 10);
            $table->string('grade', 20);
            $table->char('group', 1);
            $table->unsignedBigInteger('user_iduser');
            $table->timestamps();

            // $table->foreign('user_iduser')->references('iduser')->on('user')->onDelete('NO ACTION')->onUpdate('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumn');
    }
};
