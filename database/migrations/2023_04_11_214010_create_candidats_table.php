<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidats', function (Blueprint $table) {
            $table->id();
            // $table->string('cin')->unique();
             $table->string('nom');
            // $table->string('prenom');
            // $table->string('email')->unique();
            // $table->date('date_naissance');
            // $table->string('num_apogee');
            // $table->string('nationalite');
            // $table->boolean('fonctionnaire');
            // $table->string('sexe');
            // $table->string('etablissement');
            // $table->string('université');
            //$table->string('fillière');
            $table->integer('annee_bac');
            $table->integer('date_inscription_dernier_diplome');
            $table->integer('date_obtiention_diplome_licence');
            $table->double('moyenne_S1');
            $table->double('moyenne_S2');
            $table->double('moyenne_S3');
            $table->double('moyenne_S4');
            $table->double('moyenne_S5');
            $table->double('moyenne_S6');
            $table->boolean('session_S1');
            $table->boolean('session_S2');
            $table->boolean('session_S3');
            $table->boolean('session_S4');
            $table->boolean('session_S5');
            $table->boolean('session_S6');
            
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
        Schema::dropIfExists('candidats');
    }
}
