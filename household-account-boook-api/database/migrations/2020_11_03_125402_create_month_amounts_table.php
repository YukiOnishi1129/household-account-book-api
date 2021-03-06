<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonthAmountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('month_amounts', function (Blueprint $table) {
            $table->id()->index();
            $table->integer('money')->comment('金額');
            $table->dateTime('date')->comment('金額日付');
            $table->foreignId('user_id')->comment('ユーザーID')->constrained();
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
        Schema::dropIfExists('month_amounts');
    }
}
