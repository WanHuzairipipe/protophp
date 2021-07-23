<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSemakansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semakans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->String('nama', 50);
            $table->Integer('no_permit');
            // $table->date('tarikh');
            $table->String('status', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('semakans');
    }
}
