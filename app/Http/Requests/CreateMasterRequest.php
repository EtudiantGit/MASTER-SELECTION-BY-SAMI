<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMasterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|max:255|string',
            'departement_id' => 'required|exists:departements,id',
            'type_id' => 'required|exists:types,id',
            //-------------------------------
            'coef_moyenne_s1'  => 'required',
            'coef_moyenne_s2'  => 'required',
            'coef_moyenne_s3'  => 'required',
            'coef_moyenne_s4'  => 'required',
            'coef_moyenne_s5'  => 'required',
            'coef_moyenne_s6'  => 'required',
            'coef_moyenne_licence' => 'required',
            //-------------------------------
            'ordinaireS1'  => 'required',
            'ordinaireS2'  => 'required',
            'ordinaireS3'  => 'required',
            'ordinaireS4'  => 'required',
            'ordinaireS5'  => 'required',
            'ordinaireS6'  => 'required',
            //--------------------------------
            'dureeDiplome3ans'  => 'required',
            'dureeDiplome4ans'  => 'required',
            'dureeDiplome5ans'  => 'required',
            'dureeDiplome6ans'  => 'required',
            //--------------------------------
            'ancienteDiplome0an' => 'required',
            'ancienteDiplome1an' => 'required',
            'ancienteDiplome2ans' => 'required',
            'ancienteDiplome3ans' => 'required',
            //--------------------------------
            'deugmin1'  =>  'required',
            'deugmin2'  =>  'required',
            'deugmin3'  =>  'required',
            'deugmin4'  =>  'required',
            'deugmin5'  =>  'required',
            'deugmin6'  =>  'required',
            //--------------------------------
            'deugmax1'  =>  'required',
            'deugmax2'  =>  'required',
            'deugmax3'  =>  'required',
            'deugmax4'  =>  'required',
            'deugmax5'  =>  'required',
            'deugmax6'  =>  'required',
            //--------------------------------
            'bonusDeug1'  => 'required',
            'bonusDeug2'  => 'required',
            'bonusDeug3'  => 'required',
            'bonusDeug4'  => 'required',
            'bonusDeug5'  => 'required',
            'bonusDeug6'  => 'required',
            //-------------------------------
            'S5_S6_min1'    => 'required',
            'S5_S6_min2'    => 'required',
            'S5_S6_min3'    => 'required',
            'S5_S6_min4'    => 'required',
            'S5_S6_min5'    => 'required',
            'S5_S6_min6'    => 'required',
            //-------------------------------
            'S5_S6_max1'    => 'required',
            'S5_S6_max2'    => 'required',
            'S5_S6_max3'    => 'required',
            'S5_S6_max4'    => 'required',
            'S5_S6_max5'    => 'required',
            'S5_S6_max6'    => 'required',
            //------------------------------
            'bonus_S5_S6_1' => 'required',
            'bonus_S5_S6_2' => 'required',
            'bonus_S5_S6_3' => 'required',
            'bonus_S5_S6_4' => 'required',
            'bonus_S5_S6_5' => 'required',
            'bonus_S5_S6_6' => 'required',
            //----------------------------
            'licence_min_1' => 'required',
            'licence_min_2' => 'required',
            'licence_min_3' => 'required',
            'licence_min_4' => 'required',
            'licence_min_5' => 'required',
            'licence_min_6' => 'required',
            //----------------------------
            'licence_max_1' => 'required',
            'licence_max_2' => 'required',
            'licence_max_3' => 'required',
            'licence_max_4' => 'required',
            'licence_max_5' => 'required',
            'licence_max_6' => 'required',
            //----------------------------
            'bonus_licence_1' => 'required',
            'bonus_licence_2' => 'required',
            'bonus_licence_3' => 'required',
            'bonus_licence_4' => 'required',
            'bonus_licence_5' => 'required',
            'bonus_licence_6' => 'required',
        ];
    }
}
