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
        Schema::create('comics', function (Blueprint $table) {

            $table->id();
            $table->string('title', 50);
            $table->text('description')->nullable();
            $table->string('thumb');
            $table->float('price', 5, 2)->unsigned();
            $table->string('series', 50);
            $table->date('sale_date');
            $table->string('type', 30);

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
        Schema::dropIfExists('comics');
    }
};
