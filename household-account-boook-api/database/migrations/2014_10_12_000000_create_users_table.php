<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->string('name')->comment('氏名');
            $table->string('email')->unique()->comment('メールアドレス');
            $table->string('password')->comment('パスワード');
            $table->integer('user_type')->comment('ユーザータイプ 1:メイン, 2: メインのパートナー, 3:お試し, 4:お試しのパートナー');
            $table->string('main_user_id')->nullable()->comment('メインユーザーのID (パートナーユーザーに紐づくメインユーザー)');
            $table->timestamps();
            $table->boolean('delete_flg')->default(false)->comment('削除フラグ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
