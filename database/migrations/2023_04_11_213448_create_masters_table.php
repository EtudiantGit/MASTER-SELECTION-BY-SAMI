<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masters', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            // $table->foreignId('user_id')->constrained()->onDelete('cascade');
            // $table->foreignId('departement_id')->constrained()->onDelete('cascade');
            // $table->foreignId('type_id')->constrained()->onDelete('cascade');
            // //----------------------------
            $table->double('coef_moyenne_s1');
            $table->double('coef_moyenne_s2');
            $table->double('coef_moyenne_s3');
            $table->double('coef_moyenne_s4');
            $table->double('coef_moyenne_s5');
            $table->double('coef_moyenne_s6');
            $table->double('coef_moyenne_licence');
            //----------------------------
            $table->double('ordinaireS1');
            $table->double('ordinaireS2');
            $table->double('ordinaireS3');
            $table->double('ordinaireS4');
            $table->double('ordinaireS5');
            $table->double('ordinaireS6');
            //----------------------------
            $table->double('ancienteDiplome0an');
            $table->double('ancienteDiplome1an');
            $table->double('ancienteDiplome2ans');
            $table->double('ancienteDiplome3ans');
            //----------------------------
            $table->double('dureeDiplome3ans');
            $table->double('dureeDiplome4ans');
            $table->double('dureeDiplome5ans');
            $table->double('dureeDiplome6ans');
            //----------------------------
                    $table->double('deugmin1');
                    $table->double('deugmax1');
                        $table->double('deugmin2');
                        $table->double('deugmax2');
                    $table->double('deugmin3');
                    $table->double('deugmax3');
                        $table->double('deugmin4');
                        $table->double('deugmax4');
                    $table->double('deugmin5');
                    $table->double('deugmax5');
                        $table->double('deugmin6');
                        $table->double('deugmax6');
            //-------------------
            $table->double('bonusDeug1');
            $table->double('bonusDeug2');
            $table->double('bonusDeug3');
            $table->double('bonusDeug4');
            $table->double('bonusDeug5');
            $table->double('bonusDeug6');
            //--------------------
            $table->double('S5_S6_min1');
            $table->double('S5_S6_max1');
            $table->double('bonus_S5_S6_1');
            //--------------------
            $table->double('S5_S6_min2');
            $table->double('S5_S6_max2');
            $table->double('bonus_S5_S6_2');
            //--------------------
            $table->double('S5_S6_min3');
            $table->double('S5_S6_max3');
            $table->double('bonus_S5_S6_3');
            //--------------------
            $table->double('S5_S6_min4');
            $table->double('S5_S6_max4');
            $table->double('bonus_S5_S6_4');
            //--------------------
            $table->double('S5_S6_min5');
            $table->double('S5_S6_max5');
            $table->double('bonus_S5_S6_5');
            //--------------------
            $table->double('S5_S6_min6');
            $table->double('S5_S6_max6');
            $table->double('bonus_S5_S6_6');
            //--------------------
            $table->double('licence_min_1');
            $table->double('licence_max_1');
            $table->double('bonus_licence_1');
            //--------------------
            $table->double('licence_min_2');
            $table->double('licence_max_2');
            $table->double('bonus_licence_2');
            //--------------------
            $table->double('licence_min_3');
            $table->double('licence_max_3');
            $table->double('bonus_licence_3');
            //--------------------
            $table->double('licence_min_4');
            $table->double('licence_max_4');
            $table->double('bonus_licence_4');
            //--------------------
            $table->double('licence_min_5');
            $table->double('licence_max_5');
            $table->double('bonus_licence_5');
            //--------------------
            $table->double('licence_min_6');
            $table->double('licence_max_6');
            $table->double('bonus_licence_6');
            //--------------------
            // $table->tinyInteger('moyenne_deug');
            // $table->tinyInteger('moyenne_licence');
            // $table->tinyInteger('moyenne_S5_S6');
            //--------------------
            // $table->string('prerequis_1');
            // $table->string('prerequis_2');
            // $table->string('prerequis_3');
            // $table->string('prerequis_4');
            // //--------------------
            // $table->double('bonus_prerequis_1');
            // $table->double('bonus_prerequis_2');
            // $table->double('bonus_prerequis_3');
            // $table->double('bonus_prerequis_4');
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
        Schema::dropIfExists('masters');
    }
}
