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
        Schema::create('program', function (Blueprint $table) {
            $table->bigIncrements('id'); // Auto-incrementing primary key
            $table->string('program', 45); // VARCHAR(45) NOT NULL
            $table->string('acronym', 45)->nullable(); // VARCHAR(45) NULL
            $table->string('logo', 45)->nullable(); // VARCHAR(45) NULL
            $table->timestamps(); // Adds created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('program');
    }
};
