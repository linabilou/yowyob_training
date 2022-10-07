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
        Schema::create('formations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('date')->nullable()->date();
            $table->string('titre')->nullable();
            $table->string('description')->nullable();
            $table->string('duree')->nullable();
            $table->string('objectives')->nullable();
            $table->string('debouchees')->nullable();
            $table->string('cibles')->nullable();
            $table->string('image')->nullable();
            $table->string('prerequis')->nullable();
            $table->string('cree_par')->nullable();
            $table->string('modifier_par')->nullable();
            $table->string('prix')->default('free');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formations');
    }
};
