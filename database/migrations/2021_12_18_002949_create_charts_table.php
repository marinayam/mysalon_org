<!--Profile_tabel使わない-->
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('charts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name01');//名前（漢字）を保存するカラム
            $table->string('name02');//名前（ふりがな）を保存するカラム
            $table->string('tel');//電話番号を保存するカラム
            $table->string('email');//メールアドレスを保存するカラム
            $table->date('birthday');//生年月日を保存するカラム
            $table->string('zip');//郵便番号を保存するカラム
            $table->string('pref');//都道府県を保存するカラム
            $table->string('addr01');//市区町村を保存するカラム
            $table->string('addr02');//建物名・その他を保存するカラム
            $table->integer('chart_trigger_id');//来店きっかけを保存するカラム
            $table->string('trouble');//お化粧品や施術でのトラブルの経験を保存するカラム
            $table->string('concern');//目元・眉・肌で気になる点を保存するカラム
            $table->string('allergy');//アレルギーを保存するカラム
            $table->integer('chart_record_id');//今までの施術や手術のご経験を保存するカラム
            $table->integer('chart_body_concern_id');//体調の問題を保存するカラム
            // $table->string('chart_caution_id');//注意事項を保存するカラム
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
        Schema::dropIfExists('charts');
    }
}
