<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('company_id'); // メーカー名をを保存するカラム
            $table->integer('device_id'); // デバイス種類を保存するカラム
            $table->enum('type', ['1','2','3']); // 種類を保存するカラム
            $table->integer('division_id'); // 区分を保存するカラム
            $table->string('title'); // タイトルを保存するカラム
            $table->string('body');  // 詳細説明を保存するカラム
            $table->string('image_path')->nullable();  // 画像のパスを保存するカラム
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
        Schema::dropIfExists('modes');
    }
}
