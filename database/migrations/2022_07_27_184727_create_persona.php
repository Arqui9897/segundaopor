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
        Schema::create('persona', function (Blueprint $table) {
            $table->id();
            $table->string('npersona');
            $table->string('apersona');
            $table->string('cpersona');
            $table->string('epersona');
            $table->foreignId('id_sintomas')->nullable()->constrained('sintomas');
            $table->foreignId('id_especialidad')->nullable()->constrained('especialidad');
            $table->foreignId('id_tipopersona')->nullable()->constrained('tipopersona');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persona');
    }
};
