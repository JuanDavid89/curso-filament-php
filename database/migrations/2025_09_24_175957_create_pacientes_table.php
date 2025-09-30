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
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();

            // Datos básicos
            $table->string('name');                  // Nombre del paciente
            $table->string('email')->unique();       // Email único
            $table->string('password');              // Contraseña encriptada

            // Datos adicionales opcionales (puedes eliminar/añadir lo que quieras)
            $table->string('telefono')->nullable();  // Teléfono de contacto
            $table->date('fecha_nacimiento')->nullable(); // Fecha de nacimiento
            $table->text('direccion')->nullable();   // Dirección

            $table->timestamps(); // created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};
