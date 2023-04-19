<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Candidat;
use App\Models\Master;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
// use Barryvdh\DomPDF\Facade as PDF;
// use Barryvdh\DomPDF\PDF as DomPDFPDF;

class CandidatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $masters = Master::all();
        return view('candidat.create', compact('masters'));
    }

    public function calculateScore($candidat_id, $selectedMasters){
        $candidat = Candidat::findOrFail($candidat_id);
        // $notes = [$candidat->note1, $candidat->note2, $candidat->note3];

        $masters = Master::whereIn('id', $selectedMasters)->get();

        $scores = [];
        foreach ($masters as $master) {
            $score = 0;
                 /**Debut GABLI */
            // calculer le score du master en fonction des critères de sélection et des notes du candidat
            // ...
             $masters=array();
            // $master_index=0;
            // $id = $candidat->Id;
            
            $moyDeug =  ($candidat->moyenne_S1 + $candidat->moyenne_S2 + $candidat->moyenne_S3 + $candidat->moyenne_S4)/4;
            $moyS5S6 =  ($candidat->moyenne_S5 + $candidat->moyenne_S6)/2;
            $moyLicence =  ($candidat->moyenne_S1 + $candidat->moyenne_S2 + $candidat->moyenne_S3 + $candidat->moyenne_S4 + $candidat->moyenne_S5 + $candidat->moyenne_S6)/6;      
            
            // $score=0;
            // $scoreNormalise=0;
            // $master = $evaluation->getMaster();
            $moyenne = (                        ($candidat->moyenne_S1*$master->coef_moyenne_s1 + 
                                                $candidat->moyenne_S2*$master->coef_moyenne_s2 + 
                                                $candidat->moyenne_S3*$master->coef_moyenne_s3 + 
                                                $candidat->moyenne_S4*$master->coef_moyenne_s4 +
                                                $candidat->moyenne_S5*$master->coef_moyenne_s5 +
                                                $candidat->moyenne_S6*$master->coef_moyenne_s6)/
                                                ($master->coef_moyenne_s1 + $master->coef_moyenne_s2 + 
                                                $master->coef_moyenne_s3 + $master->coef_moyenne_s4 + 
                                                $master->coef_moyenne_s5 + $master->coef_moyenne_s6)*
                                                $master->coef_moyenne_licence);
    
            // $moyenneMax = ((20*$master->coef_moyenne_s1 + 
            //                                     20*$master->coef_moyenne_s2 + 
            //                                     20*$master->coef_moyenne_s3 + 
            //                                     20*$master->coef_moyenne_s4 +
            //                                     20*$master->coef_moyenne_s5 +
            //                                     20*$master->coef_moyenne_s6)/
            //                                     ($master->coef_moyenne_s1 + $master->coef_moyenne_s2 + 
            //                                     $master->coef_moyenne_s3 + $master->coef_moyenne_s4 + 
            //                                     $master->coef_moyenne_s5 + $master->coef_moyenne_s6)*
            //                                     $master->coef_moyenne_licence);
                            
                        
            // $bonusPrerequis =  $evaluation->getPrerequis1() * $master->getBonusPrerequis1() + 
            //                                     $evaluation->getPrerequis2() * $master->getBonusPrerequis2() +
            //                                     $evaluation->getPrerequis3() * $master->getBonusPrerequis3() +
            //                                     $evaluation->getPrerequis4() * $master->getBonusPrerequis4();
    
    
            // $bonusPrerequisMax =   $master->getBonusPrerequis1() + $master->getBonusPrerequis2() +
            //                     $master->getBonusPrerequis3() + $master->getBonusPrerequis4();
    
    
            $bonusDeug=0;
            if($moyDeug<$master->deugmax1 and $moyDeug>=$master->deugmin1){$bonusDeug=$master->bonusDeug1;}
            if($moyDeug<$master->deugmax2 and $moyDeug>=$master->deugmin2){$bonusDeug=$master->bonusDeug2;}
            if($moyDeug<$master->deugmax3 and $moyDeug>=$master->deugmin3){$bonusDeug=$master->bonusDeug3;}
            if($moyDeug<$master->deugmax4 and $moyDeug>=$master->deugmin4){$bonusDeug=$master->bonusDeug4;}
            if($moyDeug<$master->deugmax5 and $moyDeug>=$master->deugmin5){$bonusDeug=$master->bonusDeug5;}
            if($moyDeug<$master->deugmax6 and $moyDeug>=$master->deugmin6){$bonusDeug=$master->bonusDeug6;}
    
            // $array = array($master->bonusDeug1,$master->bonusDeug2,$master->bonusDeug3,
            //             $master->bonusDeug4,$master->bonusDeug5,$master->bonusDeug6);
            // $bonusDeugMax=$array[0];//on cherche le max du tableau
            // for($i=1;$i<6;$i++){
            //     if($bonusDeugMax<$array[$i]){
            //         $bonusDeugMax=$array[$i];
            //     }
            // }
    
            $bonusS5s6=0;
            if($moyS5S6<$master->S5_S6_max1 and $moyS5S6>=$master->S5_S6_min1){$bonusS5s6=$master->bonus_S5_S6_1;}
            if($moyS5S6<$master->S5_S6_max2 and $moyS5S6>=$master->S5_S6_min2){$bonusS5s6=$master->bonus_S5_S6_2;}
            if($moyS5S6<$master->S5_S6_max3 and $moyS5S6>=$master->S5_S6_min3){$bonusS5s6=$master->bonus_S5_S6_3;}
            if($moyS5S6<$master->S5_S6_max4 and $moyS5S6>=$master->S5_S6_min4){$bonusS5s6=$master->bonus_S5_S6_4;}
            if($moyS5S6<$master->S5_S6_max5 and $moyS5S6>=$master->S5_S6_min5){$bonusS5s6=$master->bonus_S5_S6_5;}
            if($moyS5S6<$master->S5_S6_max6 and $moyS5S6>=$master->S5_S6_min6){$bonusS5s6=$master->bonus_S5_S6_6;}
    
    
            // $array1 = array($master->bonus_S5_S6_1,$master->bonus_S5_S6_2,$master->bonus_S5_S6_3,
            //                 $master->bonus_S5_S6_4,$master->bonus_S5_S6_5,$master->bonus_S5_S6_6);
            // $bonusS5s6Max=$array1[0];//on cherche le max du tableau
            // for($i=1;$i<6;$i++){
            //     if($bonusS5s6Max<$array1[$i]){
            //             $bonusS5s6Max=$array1[$i];
            //         }
            //     }
    
            $bonusLicence=0;
            if($moyLicence<$master->licence_max_1 and $moyLicence>=$master->licence_min_1){$bonusLicence=$master->bonus_licence_1;}
            if($moyLicence<$master->licence_max_2 and $moyLicence>=$master->licence_min_2){$bonusLicence=$master->bonus_licence_2;}
            if($moyLicence<$master->licence_max_3 and $moyLicence>=$master->licence_min_3){$bonusLicence=$master->bonus_licence_3;}
            if($moyLicence<$master->licence_max_4 and $moyLicence>=$master->licence_min_4){$bonusLicence=$master->bonus_licence_4;}
            if($moyLicence<$master->licence_max_5 and $moyLicence>=$master->licence_min_5){$bonusLicence=$master->bonus_licence_5;}
            if($moyLicence<$master->licence_max_6 and $moyLicence>=$master->licence_min_6){$bonusLicence=$master->bonus_licence_6;}
    
    
            // $array2 = array($master->bonus_licence_1,$master->bonus_licence_2,$master->bonus_licence_3,
            // $master->bonus_licence_4,$master->bonus_licence_5,$master->bonus_licence_6);
            // $bonusLicenceMax=$array2[0];//on cherche le max du tableau
            // for($i=1;$i<6;$i++){
            //     if($bonusLicenceMax<$array2[$i]){
            //         $bonusLicenceMax=$array2[$i];
            //         }
            //     }
    
            $bonusOrdinaire =  $candidat->session_S1 * $master->ordinaireS1 + 
                                                $candidat->session_S2 * $master->ordinaireS2 +
                                                $candidat->session_S3 * $master->ordinaireS3 +
                                                $candidat->session_S4 * $master->ordinaireS3 +
                                                $candidat->session_S5 * $master->ordinaireS5 +
                                                $candidat->session_S6 * $master->ordinaireS6;
    
            // $bonusOrdinaireMax=$master->ordinaireS1 +$master->ordinaireS2 +$master->ordinaireS3 +
            //                     $master->ordinaireS4 +$master->ordinaireS5 +$master->ordinaireS6;
                                            
            $bonusAncienteDiplome=0;
            $anciennete = date("Y")-$candidat->date_obtiention_diplome_licence ;
            if($anciennete==0){$bonusAncienteDiplome=$master->ancienteDiplome0an;}
            if($anciennete==1){$bonusAncienteDiplome=$master->ancienteDiplome1an;}
            if($anciennete==2){$bonusAncienteDiplome=$master->ancienteDiplome2ans;}
            if($anciennete==3){$bonusAncienteDiplome=$master->ancienteDiplome3ans;}
    
            // $bonusAncienteDiplomeMax=$master->ancienteDiplome0an;
    
            $bonusDureeDiplome=0;
            $duree = $candidat->date_obtiention_diplome_licence-$candidat->date_inscription_dernier_diplome ;
            if($duree<3){ $duree = $candidat->date_obtiention_diplome_licence-$candidat->annee_bac;}
            if($duree==3){$bonusDureeDiplome=$master->dureeDiplome3ans;}
            if($duree==4){$bonusDureeDiplome=$master->dureeDiplome4ans;}
            if($duree==5){$bonusDureeDiplome=$master->dureeDiplome5ans;}
            if($duree==6){$bonusDureeDiplome=$master->dureeDiplome6ans;}
    
            // $bonusDureeDiplomeMax=$master->dureeDiplome3ans;
    
            $score = $moyenne  +  $bonusDeug + $bonusS5s6 + $bonusLicence + $bonusOrdinaire +
                            $bonusAncienteDiplome + $bonusDureeDiplome /*+ $bonusPrerequis*/;
    
            // $sommeScoreNormalise = $moyenneMax  +  $bonusDeugMax + $bonusS5s6Max + $bonusLicenceMax + 
            //                     $bonusOrdinaireMax + $bonusAncienteDiplomeMax + $bonusDureeDiplomeMax + 
            //                     $bonusPrerequisMax;
    
            // $scoreNormalise = $score*20/$sommeScoreNormalise;
    
            // $evaluation->setScore(round($score,2));//sauvegarder dans la BD
            // $evaluation->setScoreNormalise(round($scoreNormalise,2));
                /*FIN GABLI */
            $scores[$master->id] = $score;
        }

        return $scores;
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'cin' => 'required|min:8|max:8',

            'prenom' => 'required',
            'email' => 'required',
            'date_naissance' => 'required',
            'apogee' => '',
            'telephone' => 'required',
            'nationalite' => 'required',
            'spécialité' => 'required',
            'université' => 'required',
            'ets' => 'required',
            'sexe' => 'required',
            'situation' => 'required',
            'masters' => 'required|array|min:1',

            'annee_bac' => 'required',
            'annee_last_dip' => 'required',
            'annee_obt_dip' => 'required',
            'note_s1' => 'required|regex:/^\d{2}(\.\d{1,3})?$/',
            'note_s2' => 'required|regex:/^\d{2}(\.\d{1,3})?$/',
            'note_s3' => 'required|regex:/^\d{2}(\.\d{1,3})?$/',
            'note_s4' => 'required|regex:/^\d{2}(\.\d{1,3})?$/',
            'note_s5' => 'required|regex:/^\d{2}(\.\d{1,3})?$/',
            'note_s6' => 'required|regex:/^\d{2}(\.\d{1,3})?$/',
            's1'=>'required',
            's2'=>'required',
            's3'=>'required',
            's4'=>'required',
            's5'=>'required',
            's6'=>'required',
        ]);
        
        $cin = $request->input('cin');
        $email = $request->input('email');
        $candidatExistant = Candidat::where('cin', $cin)->first();
        $candidatExistant1 = Candidat::where('email', $email)->first();
        if ($candidatExistant) {
            return back()->with('error', 'Vous avez déjà déposé votre candidature.');
        }
        elseif ($candidatExistant1){
            return back()->with('error', 'Cet est email existe déja');
        }
        else{
        $candidat = new Candidat();
        $candidat->nom = $request->input('nom');

        $candidat->prenom = $request->input('prenom');
        $candidat->email = $request->input('email');
        $candidat->date_naissance = $request->input('date_naissance');
        $candidat->num_apogee = $request->input('apogee');
        $candidat->telephone = $request->input('telephone');
        $candidat->nationalite = $request->input('nationalite');
        $candidat->spécialité = $request->input('spécialité');
        $candidat->université = $request->input('université');
        $candidat->etablissement = $request->input('ets');

        $candidat->cin = $cin;
        $candidat->annee_bac = $request->input('annee_bac');
        $candidat->date_inscription_dernier_diplome = $request->input('annee_last_dip');
        $candidat->date_obtiention_diplome_licence = $request->input('annee_obt_dip');
        $candidat->moyenne_S1 = $request->input('note_s1');
        $candidat->moyenne_S2 = $request->input('note_s2');
        $candidat->moyenne_S3 = $request->input('note_s3');
        $candidat->moyenne_S4 = $request->input('note_s4');
        $candidat->moyenne_S5 = $request->input('note_s5');
        $candidat->moyenne_S6 = $request->input('note_s6');
        $randomNumber = mt_rand(100, 99999999999);
        // Vérifier si un numéro de dossier similaire existe déjà
        while (Candidat::where('num_dossier', $randomNumber)->exists()) {
            // Générer un nouveau numéro de dossier
            $randomNumber = mt_rand(100, 99999999999);
        }
        $candidat->num_dossier = $randomNumber;
        if($request->input('sexe') === 'homme'){
            $candidat->sexe = 'HOMME';
        } else {
            $candidat->sexe = 'FEMME';
        }
        if($request->input('situation') === 'simpleEtudiant'){
            $candidat->situation = 'SIMPLE ETUDIANT';
        } else {
            $candidat->situation = 'FONCTIONNAIRE';
        }
        if($request->input('s1') === 'oui'){
            $candidat->session_S1 = 1;
        } else {
            $candidat->session_S1 = 0;
        }
        if($request->input('s2') === 'oui'){
            $candidat->session_S2 = 1;
        } else {
            $candidat->session_S2 = 0;
        }
        if($request->input('s3') === 'oui'){
            $candidat->session_S3 = 1;
        } else {
            $candidat->session_S3 = 0;
        }
        if($request->input('s4') === 'oui'){
            $candidat->session_S4 = 1;
        } else {
            $candidat->session_S4 = 0;
        }
        if($request->input('s5') === 'oui'){
            $candidat->session_S5 = 1;
        } else {
            $candidat->session_S5 = 0;
        }
        if($request->input('s6') === 'oui'){
            $candidat->session_S6 = 1;
        } else {
            $candidat->session_S6 = 0;
        }
        $selectedMasters = $request->input('masters',[]);
        $masters = Master::whereIn('id', $selectedMasters)->get();
        
        $candidat->save();
       
        /**
         * TEST TEST TEST TEST TEST
         * 
         */
        

        $scores = [];
        foreach ($masters as $master) {
            $score = 0;
                 /**Debut GABLI */
            // calculer le score du master en fonction des critères de sélection et des notes du candidat
            // ...
            // $masters=array();
            // $master_index=0;
            // $id = $candidat->Id;
            $moyDeug =  ($candidat->moyenne_S1 + $candidat->moyenne_S2 + $candidat->moyenne_S3 + $candidat->moyenne_S4)/4;
            $moyS5S6 =  ($candidat->moyenne_S5 + $candidat->moyenne_S6)/2;
            $moyLicence =  ($candidat->moyenne_S1 + $candidat->moyenne_S2 + $candidat->moyenne_S3 + $candidat->moyenne_S4 + $candidat->moyenne_S5 + $candidat->moyenne_S6)/6;      
            
            // $score=0;
            // $scoreNormalise=0;
            // $master = $evaluation->getMaster();
            $moyenne = (                        ($candidat->moyenne_S1*$master->coef_moyenne_s1 + 
                                                $candidat->moyenne_S2*$master->coef_moyenne_s2 + 
                                                $candidat->moyenne_S3*$master->coef_moyenne_s3 + 
                                                $candidat->moyenne_S4*$master->coef_moyenne_s4 +
                                                $candidat->moyenne_S5*$master->coef_moyenne_s5 +
                                                $candidat->moyenne_S6*$master->coef_moyenne_s6)/
                                                ($master->coef_moyenne_s1 + $master->coef_moyenne_s2 + 
                                                $master->coef_moyenne_s3 + $master->coef_moyenne_s4 + 
                                                $master->coef_moyenne_s5 + $master->coef_moyenne_s6)*
                                                $master->coef_moyenne_licence);
    
           
            $bonusDeug=0;
            if($moyDeug<$master->deugmax1 and $moyDeug>=$master->deugmin1){$bonusDeug=$master->bonusDeug1;}
            if($moyDeug<$master->deugmax2 and $moyDeug>=$master->deugmin2){$bonusDeug=$master->bonusDeug2;}
            if($moyDeug<$master->deugmax3 and $moyDeug>=$master->deugmin3){$bonusDeug=$master->bonusDeug3;}
            if($moyDeug<$master->deugmax4 and $moyDeug>=$master->deugmin4){$bonusDeug=$master->bonusDeug4;}
            if($moyDeug<$master->deugmax5 and $moyDeug>=$master->deugmin5){$bonusDeug=$master->bonusDeug5;}
            if($moyDeug<$master->deugmax6 and $moyDeug>=$master->deugmin6){$bonusDeug=$master->bonusDeug6;}
    
           
    
            $bonusS5s6=0;
            if($moyS5S6<$master->S5_S6_max1 and $moyS5S6>=$master->S5_S6_min1){$bonusS5s6=$master->bonus_S5_S6_1;}
            if($moyS5S6<$master->S5_S6_max2 and $moyS5S6>=$master->S5_S6_min2){$bonusS5s6=$master->bonus_S5_S6_2;}
            if($moyS5S6<$master->S5_S6_max3 and $moyS5S6>=$master->S5_S6_min3){$bonusS5s6=$master->bonus_S5_S6_3;}
            if($moyS5S6<$master->S5_S6_max4 and $moyS5S6>=$master->S5_S6_min4){$bonusS5s6=$master->bonus_S5_S6_4;}
            if($moyS5S6<$master->S5_S6_max5 and $moyS5S6>=$master->S5_S6_min5){$bonusS5s6=$master->bonus_S5_S6_5;}
            if($moyS5S6<$master->S5_S6_max6 and $moyS5S6>=$master->S5_S6_min6){$bonusS5s6=$master->bonus_S5_S6_6;}

    
            $bonusLicence=0;
            if($moyLicence<$master->licence_max_1 and $moyLicence>=$master->licence_min_1){$bonusLicence=$master->bonus_licence_1;}
            if($moyLicence<$master->licence_max_2 and $moyLicence>=$master->licence_min_2){$bonusLicence=$master->bonus_licence_2;}
            if($moyLicence<$master->licence_max_3 and $moyLicence>=$master->licence_min_3){$bonusLicence=$master->bonus_licence_3;}
            if($moyLicence<$master->licence_max_4 and $moyLicence>=$master->licence_min_4){$bonusLicence=$master->bonus_licence_4;}
            if($moyLicence<$master->licence_max_5 and $moyLicence>=$master->licence_min_5){$bonusLicence=$master->bonus_licence_5;}
            if($moyLicence<$master->licence_max_6 and $moyLicence>=$master->licence_min_6){$bonusLicence=$master->bonus_licence_6;}
    
    
            $bonusOrdinaire =  $candidat->session_S1 * $master->ordinaireS1 + 
                                                $candidat->session_S2 * $master->ordinaireS2 +
                                                $candidat->session_S3 * $master->ordinaireS3 +
                                                $candidat->session_S4 * $master->ordinaireS3 +
                                                $candidat->session_S5 * $master->ordinaireS5 +
                                                $candidat->session_S6 * $master->ordinaireS6;
    
                                  
            $bonusAncienteDiplome=0;
            $anciennete = date("Y")-$candidat->date_obtiention_diplome_licence ;
            if($anciennete==0){$bonusAncienteDiplome=$master->ancienteDiplome0an;}
            if($anciennete==1){$bonusAncienteDiplome=$master->ancienteDiplome1an;}
            if($anciennete==2){$bonusAncienteDiplome=$master->ancienteDiplome2ans;}
            if($anciennete==3){$bonusAncienteDiplome=$master->ancienteDiplome3ans;}
    
          
            $bonusDureeDiplome=0;
            $duree = $candidat->date_obtiention_diplome_licence-$candidat->date_inscription_dernier_diplome ;
            if($duree<3){ $duree = $candidat->date_obtiention_diplome_licence-$candidat->annee_bac;}
            if($duree==3){$bonusDureeDiplome=$master->dureeDiplome3ans;}
            if($duree==4){$bonusDureeDiplome=$master->dureeDiplome4ans;}
            if($duree==5){$bonusDureeDiplome=$master->dureeDiplome5ans;}
            if($duree==6){$bonusDureeDiplome=$master->dureeDiplome6ans;}
    
         
            $score = $moyenne  +  $bonusDeug + $bonusS5s6 + $bonusLicence + $bonusOrdinaire +
                            $bonusAncienteDiplome + $bonusDureeDiplome /*+ $bonusPrerequis*/;
    
           
                /*FIN GABLI */
            $scores[$master->id] = $score;
            $candidat->masters()->attach($master->id, ['score' => $scores[$master->id]]);
            
        }
        /**
         * Téléchrager Recap candidature
         * 
         */    
       
         view()->share([
            'candidat' => $candidat,
            'masters'  => $masters
        ]);
        $pdf = PDF::loadView('candidat.recap-candidature',[
            'candidat' => $candidat,
            'masters'  => $masters
        ]);
        return $pdf->download($candidat->nom.".pdf");
        
        }
         /**
          * Fin recap candidature
          */
         
          
        // Session::flash('num_dossier', $candidat->num_dossier);
        // return Redirect::route('welcome')->withInput();

        // return redirect()->route('welcome');
         /**
          *FIN FIN FIN FIN TEST TEST TEST TEST TEST TEST
          */
        
        

    
        // $scores = $this->calculateScore($candidat->id, $selectedMasters);
        // foreach ($selectedMasters as $master_id) {
        //     $candidat->masters()->attach($master_id, ['score' => $scores[$master_id]]);
        // }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Candidat  $candidat
     * @return \Illuminate\Http\Response
     */
    public function show(Candidat $candidat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Candidat  $candidat
     * @return \Illuminate\Http\Response
     */
    public function edit(Candidat $candidat)
    {
        //
    }

    public function store_login_candidat(Request $request){
        $cin = request('cin');
        $code_dossier = request('num_dossier');
        $donnees = Candidat::where();
        // Vérifier si le CIN et le code de dossier existent dans la base de données
        // Récupérer les données précédemment saisies par le candidat
        // Afficher le formulaire de modification avec les données récupérées
    
        return view('candidat.modifier-candidature', [
            'donnees' => $donnees,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Candidat  $candidat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Candidat $candidat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Candidat  $candidat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Candidat $candidat)
    {
        //
    }
}
