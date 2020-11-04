<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDateAmountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('date_amounts', function (Blueprint $table) {
            $table->id()->index();
            $table->integer('money')->comment('金額');
            $table->dateTime('date')->comment('金額日付');
            $table->foreignId('user_id')->comment('ユーザーID')->constrained();
            $table->timestamps();
            $table->unique('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('date_amounts');
    }
}
