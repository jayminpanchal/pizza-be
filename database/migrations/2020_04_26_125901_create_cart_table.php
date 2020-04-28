<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart', function (Blueprint $table) {
            $table->id();
            $table->string('uuid');
            $table->unsignedInteger('quantity');
        });
        Schema::table('cart', function ($table) {
            $table->foreignId('pizza_id')->constrained('pizza')->onDelete('cascade');
            $table->foreignId('size_id')->constrained('size')->onDelete('cascade');
            $table->foreignId('crust_id')->constrained('crust')->onDelete('cascade');
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
        Schema::dropIfExists('cart');
    }
}
