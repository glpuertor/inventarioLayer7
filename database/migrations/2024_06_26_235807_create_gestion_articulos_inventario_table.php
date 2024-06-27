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
        Schema::create('gestion_articulos_inventario', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->primary('id', 'xyz_pk');
            $table->string('nombre', 100);
            $table->text('descripcion')->nullable();
            $table->integer('cantidad');
            $table->decimal('precio', 11,2);
            $table->integer('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gestion_articulos_inventario');
    }
};
