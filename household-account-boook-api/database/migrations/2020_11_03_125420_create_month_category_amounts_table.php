<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonthCategoryAmountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('month_category_amounts', function (Blueprint $table) {
            $table->id()->index();
            $table->foreignId('category_id')->comment('カテゴリーID')->constrained();
            $table->integer('money')->comment('金額');
            $table->string('image_path')->nullable()->comment('画像ファイルパス');
            $table->dateTime('date')->comment('対象月');
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
        Schema::dropIfExists('month_category_amounts');
    }
}
