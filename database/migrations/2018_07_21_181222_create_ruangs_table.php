<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRuangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ruangs', function (Blueprint $table) {
            $table->increments('ruang_id');
            $table->string('nm_ruang')->nullable();
            $table->string('luas_ruang')->nullable();
            $table->string('jns_lamp')->nullable();
            $table->string('jml_lamp')->nullable();
            $table->string('daya_lamp')->nullable();
            $table->string('nmbebanac')->nullable();
            $table->string('jml_ac')->nullable();
            $table->string('daya_ac')->nullable();
            $table->string('jnsbebanlain')->nullable();
            $table->string('jmlbebanlain')->nullable();
            $table->string('dyabebanlain')->nullable();
            $table->text('nm_mesin')->nullable();
            $table->string('jml_mesin')->nullable();
            $table->string('daya_mesin')->nullable();
            $table->string('nilai_IKE')->nullable();
            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ruangs');
    }
}
