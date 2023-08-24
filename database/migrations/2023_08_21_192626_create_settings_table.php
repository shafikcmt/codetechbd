<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
			$table->text('icon')->default('icon.png');
			$table->text('title')->default('our best website');
			$table->longText('description')->default('this is test website');
			$table->longText('keywords')->default('code, website');
			$table->text('mobile')->default(017);
			$table->longText('address')->default('dhaka.bangladesh');
			$table->text('email')->default('admin@mail.com');
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
        Schema::dropIfExists('settings');
    }
}
