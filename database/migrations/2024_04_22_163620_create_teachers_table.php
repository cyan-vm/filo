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
        Schema::create('teacher', function (Blueprint $table) {
            $table->increments('idteacher');
            $table->string('numEmployee', 45);
            $table->string('academicLevel', 100);
            $table->unsignedBigInteger('user_id'); // Rename the foreign key column
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('program_id');
            $table->foreign('program_id')->references('id')->on('program')->onDelete('NO ACTION')->onUpdate('NO ACTION');
            
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
        Schema::dropIfExists('teacher');
    }
};
