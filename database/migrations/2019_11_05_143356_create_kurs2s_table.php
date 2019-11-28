<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKurs2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kurs2s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name');
            $table->text('description');
            $table->text('picturePath');
            $table->timestamps();
        });

        DB::table('kurs2s')->insert(
            ['name' => 'MyPHPTutorial-Test', 'description' => 'Jo Alde Hier ist nen Geiler Neuer Testing Tutorial', 'picturePath' => '/php_thumb.php' , 'created_at' => now(), 'updated_at' => now()]
        );
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kurs2s');
    }
}
