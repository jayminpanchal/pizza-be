<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePizzaSizeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pizza_size', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->engine = 'InnoDB';
        });

        Schema::table('pizza_size', function ($table) {
            $table->foreignId('pizza_id')->constrained('pizza')->onDelete('cascade');
            $table->foreignId('size_id')->constrained('size')->onDelete('cascade');
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
        Schema::dropIfExists('pizza_size');
    }
}
