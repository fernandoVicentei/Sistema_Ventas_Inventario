<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('descripcion');
            $table->decimal('precio',8);

            $table->unsignedBigInteger('id_categoria')->nullable();
            $table->unsignedBigInteger('id_unidad')->nullable();
            $table->unsignedBigInteger('id_archivo')->nullable();
            
            $table->foreign("id_categoria")
                ->references("id")
                ->on("categorias")
                ->onDelete("set null")
                ->onUpdate("cascade");

            $table->foreign("id_unidad")
                ->references("id")
                ->on("unidades")
                ->onDelete("set null")
                ->onUpdate("cascade");
            
            $table->foreign("id_archivo")
                ->references("id")
                ->on("archivos")
                ->onDelete("set null")
                ->onUpdate("cascade");

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
        Schema::dropIfExists('productos');
    }
}
