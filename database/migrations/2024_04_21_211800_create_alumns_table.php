<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('alumn', function (Blueprint $table) {
            $table->increments('IdAlumno');
            $table->string('matricula', 10);
            $table->string('grado', 20);
            $table->char('grupo', 1);
            $table->unsignedInteger('IdUsers');
            // $table->foreign('IdUsers')->references('IdUsers')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumn');
    }
};
