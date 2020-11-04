<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amounts', function (Blueprint $table) {
            $table->id()->index();
            $table->foreignId('category_id')->comment('カテゴリーID')->constrained();
            $table->integer('money')->comment('金額');
            $table->string('image_path')->nullable()->comment('画像ファイルパス');
            $table->dateTime('date')->comment('金額日付');
            $table->foreignId('user_id')->comment('ユーザーID')->constrained();
            $table->timestamps();
            $table->unique(['category_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('amounts');
    }
}