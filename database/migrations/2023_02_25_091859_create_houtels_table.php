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
        Schema::create('houtels', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('cities_id');
            $table->string('address');
            $table->text('about');
            $table->text('facility');
            $table->string('photo');
            $table->enum('recommendation', ['no', 'yes']);
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
        Schema::dropIfExists('houtels');
    }
};
