<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('currency_from_id')->unsigned();
            $table->bigInteger('currency_to_id')->unsigned();
            $table->decimal('ratio', 8, 4);
            $table->timestamps();

            $table->foreign('currency_from_id')->references('id')->on('currencies')->onDelete('cascade');
            $table->foreign('currency_to_id')->references('id')->on('currencies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ratios');
    }
}
