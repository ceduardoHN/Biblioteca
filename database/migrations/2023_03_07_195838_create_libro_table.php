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
        Schema::create('libro', function (Blueprint $table) {
            $table->string("ISBN",20);
            $table->string("nombre",500);
            $table->string("aPubli",15);
            $table->string("numPaginas",5);
            $table->string("codAutor");
            $table->primary("ISBN");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libro');
    }
};
