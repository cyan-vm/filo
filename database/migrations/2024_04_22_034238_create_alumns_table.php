<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */ 
    public function up()
    {
        Schema::create('alumn', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('enrollment', 10);
            $table->string('grade', 20);
            $table->char('group', 1);
            $table->unsignedBigInteger('user_id'); // Rename the foreign key column
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('alumn');
    }
};
