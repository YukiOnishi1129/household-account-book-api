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
            $table->id()->index();
            $table->string('name')->comment('氏名');
            $table->string('email')->unique()->comment('メールアドレス');
            $table->string('password')->comment('パスワード');
            $table->unsignedTinyInteger('user_type')->comment('ユーザータイプ 1:メイン, 2: メインのパートナー, 3:お試し, 4:お試しのパートナー');
            $table->unsignedTinyInteger('main_user_id')->nullable()->comment('メインユーザーのID (パートナーユーザーに紐づくメインユーザー)');
            $table->boolean('login_flg')->default(false)->comment('最終ログインフラグ');
            $table->boolean('input_flg')->default(false)->comment('最終入力フラグ');
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
