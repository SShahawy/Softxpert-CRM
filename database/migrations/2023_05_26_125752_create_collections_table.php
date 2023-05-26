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
        Schema::create('collections', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('entity_id');
            $table->unsignedBigInteger('system_id');
            $table->unsignedBigInteger('entity_data_id');
            $table->unsignedBigInteger('attribute_id');
            $table->unsignedBigInteger('data_type_id');
            $table->foreign('system_id')->references('id')->on('systems');
            $table->foreign('entity_id')->references('id')->on('entities');
            $table->foreign('entity_data_id')->references('id')->on('entity_data');
            $table->foreign('attribute_id')->references('id')->on('attributes');
            $table->foreign('data_type_id')->references('id')->on('data_types');
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
        Schema::dropIfExists('collections');
    }
};
