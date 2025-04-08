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
        



	Schema::create('informacion_general', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id')->unique();
        $table->string('name')->nullable();
        $table->string('last_name')->nullable();
	$table->string('cedula')->nullable();
        $table->string('fecha_nacimiento')->nullable();
	$table->string('genero')->nullable();
        $table->timestamps();

        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    });





	
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
