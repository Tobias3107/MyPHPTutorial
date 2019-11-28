<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKursTabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kurs_tabs', function (Blueprint $table) {
            $table->bigIncrements('tabid');
            $table->bigInteger('kurs2sid')->unsigned();
            $table->integer('order');
            $table->string('content', 255);
            $table->string('videopath',255)->nullable(true);
            $table->string('picturepath',255)->nullable(true);
            $table->foreign('kurs2sId')
                  ->references('id')->on('kurs2s');

        });

        DB::table('kurs_tabs')->insert(
            ['kurs2sid' => 1, 'order' => 1,'content' => 'Das Ist der Anfang vom Ende']
        );        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kurs_tabs');
    }
}
