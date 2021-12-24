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
            $table->string('name');//名前を保存するカラム
            $table->date('birthday');//生年月日を保存するカラム
            $table->string('email');//メールアドレスを保存するカラム
            $table->string('address');//住所を保存するカラム
            $table->string('tel');//電話番号を保存するカラム
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
