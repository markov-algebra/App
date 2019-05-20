<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('ph');
            $table->decimal('Cl');
            $table->decimal('temp_vode');
            $table->string('pranje_pjescanog_filtera');
            $table->string('pranje_mehanickog_predfiltera_u');
            $table->string('vizualni_pregled_opreme_za_dk');
            $table->string('vizualni_pregled_sve_ostale_o');
            $table->string('vizualni_pregled_stanja_bazena_v');
            $table->string('viz_pregl_stanja_str_i_el_o_srt_b');
            $table->string('ciscenje_skoljke_bazena_pod');
            $table->string('ciscenje_skoljke_bazena_zid');
            $table->string('ciscenje_preljevnih_kanala');
            $table->string('pranje_kompenzacije_bazena');
            $table->integer('ubaceno_flokulanta');
            $table->integer('stanje_tekuceg_klora');
            $table->integer('stanje_sumporne_kiseline');
            $table->text('body');
            $table->integer('user_id');
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
        Schema::dropIfExists('posts');
    }
}
