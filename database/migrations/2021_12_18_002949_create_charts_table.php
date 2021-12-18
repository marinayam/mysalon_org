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
            $table->bigIncrements('user_id');
            $table->date('birthday');
            $table->varchar('address');
            $table->varchar('phone_number');
            $table->varchar('trigger');
            $table->varchar('trouble');
            $table->varchar('concern');
            $table->varchar('allergy');
            $table->varchar('record');
            $table->varchar('body_concern');
            $table->varchar('caution');
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
