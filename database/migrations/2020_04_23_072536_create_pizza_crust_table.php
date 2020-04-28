<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePizzaCrustTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pizza_crust', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->engine = 'InnoDB';
        });

        Schema::table('pizza_crust', function ($table) {
            $table->foreignId('pizza_id')->constrained('pizza')->onDelete('cascade')->after('id');
            $table->foreignId('crust_id')->constrained('crust')->onDelete('cascade')->after('id');
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
        Schema::dropIfExists('pizza_crust');
    }
}
