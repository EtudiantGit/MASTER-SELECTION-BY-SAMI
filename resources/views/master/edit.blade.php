@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               
                <div class="card-header">{{ __('Modifier Master') }}</div>
                <form action="{{route('masters.update',$master)}}" method="POST">
                    @csrf
                    @method('PUT')


                <div class="card-body">
                   
                        
                    
                    
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}

                    {{-- {{ __('You are logged in!') }} --}}

                    <div class="form-group row">
                        <label for="titre" class="col-sm-3 col-form-label text-right">Intitulé</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{$master->title}}" class="form-control form-control-sm" name="title" id="titre" placeholder="Titre du master">
                        </div>
                    </div>
                   
                    <br>
                
                    {{-- Departement et Type --}}
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-6">
                                Département
                                <select name="departement_id" >
                                    @foreach ($departements as $departement)
                                        <option value="{{ $departement->id }}">{{ $departement->nom }}</option>
                                    @endforeach
                                </select>
            
                                @error('departement_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-6 text-end">
                                Type
                                <select name="type_id" >
                                    @foreach ($types as $type)
                                        <option value="{{ $type->id }}">{{ $type->nom }}</option>
                                    @endforeach
                                </select>
            
                                @error('type_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    {{-- Fin departement et type --}}
                    <hr><p><b>Bonus sur les moyennes</b></p><hr>






                    <table>
                        <tr>
                            <div>
                                <td><label for="">Coef moyennne s1 </label></td>
                                <td><input value="{{$master->coef_moyenne_s1}}" name="coef_moyenne_s1" type="text"></td>
                            </div>
                        </tr>
                        <tr>
                            <div>
                               <td><label for="">Coef moyennne s2</label></td>
                                <td><input value="{{$master->coef_moyenne_s2}}" name="coef_moyenne_s2" type="text"></td>
                            </div>
                        </tr>
                        <tr>
                            <div>
                                <td><label for="">Coef moyennne s3</label></td>
                                <td><input value="{{$master->coef_moyenne_s3}}" name="coef_moyenne_s3" type="text"></td>
                            </div>
                        </tr>
                        <tr>
                            <div>
                                <td><label for="">Coef moyennne s4</label></td>
                                <td><input value="{{$master->coef_moyenne_s4}}" name="coef_moyenne_s4" type="text"></td>
                            </div>
                        </tr>
                        <tr>
                            <div>
                                <td><label for="">Coef moyennne s5</label></td>
                                <td><input value="{{$master->coef_moyenne_s5}}" name="coef_moyenne_s5" type="text"></td>
                            </div>
                        </tr>
                        <tr>
                            <div>
                                <td><label for="">Coef moyennne s6</label></td>
                                <td><input value="{{$master->coef_moyenne_s6}}" name="coef_moyenne_s6" type="text"></td>
                            </div>
                        </tr>
                        <tr>
                            <div>
                                <td><label for="">Coef moyenne licence</label></td>
                                <td><input value="{{$master->coef_moyenne_licence}}" name="coef_moyenne_licence" type="text"></td>
                            </div>
                        </tr>
                        </table>
                    <hr><p><b>Bonus sur la validation en ordinaire</b></p><hr>
                
                        
                    <table>
                        <div style="text-align: center">
                            
                                <tr>
                                    <div>
                                        <td><label for="">ordinaireS1</label></td>
                                        <td><input value="{{$master->ordinaireS1}}" name="ordinaireS1" type="text"></td>
                                    </div>
                                </tr>
                                <tr>
                                    <div>
                                        <td><label for="">ordinaireS2</label></td>
                                        <td><input value="{{$master->ordinaireS2}}" name="ordinaireS2" type="text"></td>
                                    </div>
                                </tr>
                                <tr>
                                    <div>
                                        <td><label for="">ordinaireS3</label></td>
                                        <td><input value="{{$master->ordinaireS3}}" name="ordinaireS3" type="text"></td>
                                    </div>
                                </tr>
                                <tr>
                                    <div>
                                        <td><label for="">ordinaireS4</label></td>
                                        <td><input value="{{$master->ordinaireS4}}" name="ordinaireS4" type="text"></td>
                                    </div>
                                </tr>
                                <tr>
                                    <div>
                                        <td><label for="">ordinaireS5</label></td>
                                        <td><input value="{{$master->ordinaireS5}}" name="ordinaireS5" type="text"></td>
                                    </div>
                                </tr>
                                <tr>
                                    <div>
                                        <td><label for="">ordinaireS6</label></td>
                                        <td><input value="{{$master->ordinaireS6}}" name="ordinaireS6" type="text"></td>
                                    </div>
                                </tr>
                                
                        </div>
                    </table>
                  
                <hr><p><b>Bonus sur la durée et l'anciéneté du diplome</b></p><hr>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-6">
                            <div>
                                <label for="">dureeDiplome3ans</label>
                                <input value="{{$master->dureeDiplome3ans}}" name="dureeDiplome3ans" type="text">
                            </div>
                            <div>
                                <label for="">dureeDiplome4ans</label>
                                <input value="{{$master->dureeDiplome4ans}}" name="dureeDiplome4ans" type="text">
                            </div>
                            <div>
                                <label for="">dureeDiplome5ans</label>
                                <input value="{{$master->dureeDiplome5ans}}" name="dureeDiplome5ans" type="text">
                            </div>
                            <div>
                                <label for="">dureeDiplome6ans</label>
                                <input value="{{$master->dureeDiplome6ans}}" name="dureeDiplome6ans" type="text">
                            </div>
                        </div>
                        <div class="col-6 text-end">
                            <div>
                                <label for="">ancienteDiplome0an</label>
                                <input value="{{$master->ancienteDiplome0an}}" name="ancienteDiplome0an" type="text">
                            </div>
                            <div>
                                <label for="">ancienteDiplome1an</label>
                                <input value="{{$master->ancienteDiplome1an}}" name="ancienteDiplome1an" type="text">
                            </div>
                            <div>
                                <label for="">ancienteDiplome2ans</label>
                                <input value="{{$master->ancienteDiplome2ans}}"  name="ancienteDiplome2ans" type="text">
                            </div>
                            <div>
                                <label for="">ancienteDiplome3ans</label>
                                <input value="{{$master->ancienteDiplome3ans}}" name="ancienteDiplome3ans" type="text">
                            </div>
                        </div>
                    </div>
                </div>
                <hr><p><b>Bonus sur la moyenne du deug</b></p><hr>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-6">
                            <div>
                                <label for="">deugmin1</label>
                                <input value="{{$master->deugmin1}}" name="deugmin1" type="text">
                            </div>
                            <div>
                                <label for="">deugmin2</label>
                                <input value="{{$master->deugmin2}}" name="deugmin2" type="text">
                            </div>
                            <div>
                                <label for="">deugmin3</label>
                                <input value="{{$master->deugmin3}}" name="deugmin3" type="text">
                            </div>
                            <div>
                                <label for="">deugmin4</label>
                                <input value="{{$master->deugmin4}}" name="deugmin4" type="text">
                            </div>
                            <div>
                                <label for="">deugmin5</label>
                                <input value="{{$master->deugmin5}}" name="deugmin5" type="text">
                            </div>
                            <div>
                                <label for="">deugmin6</label>
                                <input value="{{$master->deugmin6}}" name="deugmin6" type="text">
                            </div>
                        </div>
                        <div class="col-6 text-end">
                            <div>
                                <label for="">deugmax1</label>
                                <input value="{{$master->deugmax1}}" name="deugmax1" type="text">
                            </div>
                            <div>
                                <label for="">deugmax2</label>
                                <input value="{{$master->deugmax2}}" name="deugmax2" type="text">
                            </div>
                            <div>
                                <label for="">deugmax3</label>
                                <input value="{{$master->deugmax3}}" name="deugmax3" type="text">
                            </div>
                            <div>
                                <label for="">deugmax4</label>
                                <input value="{{$master->deugmax4}}" name="deugmax4" type="text">
                            </div>
                            <div>
                                <label for="">deugmax5</label>
                                <input value="{{$master->deugmax5}}" name="deugmax5" type="text">
                            </div>
                            <div>
                                <label for="">deugmax6</label>
                                <input value="{{$master->deugmax6}}" name="deugmax6" type="text">
                            </div>
                        </div>
                        
                        <center>
                            <br>
                        <div class="col-6">
                            <div>
                                <label for="">bonusDeug1</label>
                                <input value="{{$master->bonusDeug1}}" name="bonusDeug1" type="text">
                            </div>
                            <div>
                                <label for="">bonusDeug2</label>
                                <input value="{{$master->bonusDeug2}}" name="bonusDeug2" type="text">
                            </div>
                            <div>
                                <label for="">bonusDeug3</label>
                                <input value="{{$master->bonusDeug3}}" name="bonusDeug3" type="text">
                            </div>
                            <div>
                                <label for="">bonusDeug4</label>
                                <input value="{{$master->bonusDeug4}}" name="bonusDeug4" type="text">
                            </div>
                            <div>
                                <label for="">bonusDeug5</label>
                                <input value="{{$master->bonusDeug5}}" name="bonusDeug5" type="text">
                            </div>
                            <div>
                                <label for="">bonusDeug6</label>
                                <input value="{{$master->bonusDeug6}}" name="bonusDeug6" type="text">
                            </div>
                        </div>
                    </center>
                    </div>
                </div>
                <hr><p><b>Bonus sur la moyenne de la troisème année de licence "S5-S6"</b></p><hr>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-6">
                            <div>
                                <label for="">S5_S6_min1</label>
                                <input value="{{$master->S5_S6_min1}}" name="S5_S6_min1" type="text">
                            </div>
                            <div>
                                <label for="">S5_S6_min2</label>
                                <input value="{{$master->S5_S6_min2}}" name="S5_S6_min2" type="text">
                            </div>
                            <div>
                                <label for="">S5_S6_min3</label>
                                <input value="{{$master->S5_S6_min3}}" name="S5_S6_min3" type="text">
                            </div>
                            <div>
                                <label for="">S5_S6_min4</label>
                                <input value="{{$master->S5_S6_min4}}" name="S5_S6_min4" type="text">
                            </div>
                            <div>
                                <label for="">S5_S6_min5</label>
                                <input value="{{$master->S5_S6_min5}}" name="S5_S6_min5" type="text">
                            </div>
                            <div>
                                <label for="">S5_S6_min6</label>
                                <input value="{{$master->S5_S6_min6}}" name="S5_S6_min6" type="text">
                            </div>
                        </div>
                        <div class="col-6 text-end">
                            <div>
                                <label for="">S5_S6_max1</label>
                                <input value="{{$master->S5_S6_max1}}" name="S5_S6_max1" type="text">
                            </div>
                            <div>
                                <label for="">S5_S6_max2</label>
                                <input value="{{$master->S5_S6_max2}}" name="S5_S6_max2" type="text">
                            </div>
                            <div>
                                <label for="">S5_S6_max3</label>
                                <input value="{{$master->S5_S6_max3}}" name="S5_S6_max3" type="text">
                            </div>
                            <div>
                                <label for="">S5_S6_max4</label>
                                <input value="{{$master->S5_S6_max4}}" name="S5_S6_max4" type="text">
                            </div>
                            <div>
                                <label for="">S5_S6_max5</label>
                                <input value="{{$master->S5_S6_max5}}" name="S5_S6_max5" type="text">
                            </div>
                            <div>
                                <label for="">S5_S6_max6</label>
                                <input value="{{$master->S5_S6_max6}}" name="S5_S6_max6" type="text">
                            </div>
                        </div>
                        
                        <center>
                            <br>
                        <div class="col-6">
                            <div>
                                <label for="">bonus_S5_S6_1</label>
                                <input value="{{$master->bonus_S5_S6_1}}" name="bonus_S5_S6_1" type="text">
                            </div>
                            <div>
                                <label for="">bonus_S5_S6_2</label>
                                <input value="{{$master->bonus_S5_S6_2}}" name="bonus_S5_S6_2" type="text">
                            </div>
                            <div>
                                <label for="">bonus_S5_S6_3</label>
                                <input value="{{$master->bonus_S5_S6_3}}" name="bonus_S5_S6_3" type="text">
                            </div>
                            <div>
                                <label for="">bonus_S5_S6_4</label>
                                <input value="{{$master->bonus_S5_S6_4}}" name="bonus_S5_S6_4" type="text">
                            </div>
                            <div>
                                <label for="">bonus_S5_S6_5</label>
                                <input value="{{$master->bonus_S5_S6_5}}" name="bonus_S5_S6_5" type="text">
                            </div>
                            <div>
                                <label for="">bonus_S5_S6_6</label>
                                <input value="{{$master->bonus_S5_S6_6}}" name="bonus_S5_S6_6" type="text">
                            </div>
                        </div>
                    </center>
                    </div>
                </div>
                <hr><p><b>Bonus sur la moyenne de la licence</b></p><hr>

                <div class="mb-3">
                    <div class="row">
                        <div class="col-6">
                            <div>
                                <label for="">licence_min_1</label>
                                <input value="{{$master->licence_min_1}}" name="licence_min_1" type="text">
                            </div>
                            <div>
                                <label for="">licence_min_2</label>
                                <input value="{{$master->licence_min_2}}" name="licence_min_2" type="text">
                            </div>
                            <div>
                                <label for="">licence_min_3</label>
                                <input value="{{$master->licence_min_3}}" name="licence_min_3" type="text">
                            </div>
                            <div>
                                <label for="">licence_min_4</label>
                                <input value="{{$master->licence_min_4}}" name="licence_min_4" type="text">
                            </div>
                            <div>
                                <label for="">licence_min_5</label>
                                <input value="{{$master->licence_min_5}}" name="licence_min_5" type="text">
                            </div>
                            <div>
                                <label for="">licence_min_6</label>
                                <input value="{{$master->licence_min_6}}" name="licence_min_6" type="text">
                            </div>
                        </div>
                        <div class="col-6 text-end">
                            <div>
                                <label for="">licence_max_1</label>
                                <input value="{{$master->licence_max_1}}" name="licence_max_1" type="text">
                            </div>
                            <div>
                                <label for="">licence_max_2</label>
                                <input value="{{$master->licence_max_2}}" name="licence_max_2" type="text">
                            </div>
                            <div>
                                <label for="">licence_max_3</label>
                                <input value="{{$master->licence_max_3}}" name="licence_max_3" type="text">
                            </div>
                            <div>
                                <label for="">licence_max_4</label>
                                <input value="{{$master->licence_max_4}}" name="licence_max_4" type="text">
                            </div>
                            <div>
                                <label for="">licence_max_5</label>
                                <input value="{{$master->licence_max_5}}" name="licence_max_5" type="text">
                            </div>
                            <div>
                                <label for="">licence_max_6</label>
                                <input value="{{$master->licence_max_6}}" name="licence_max_6" type="text">
                            </div>
                        </div>
                        
                        <center>
                            <br>
                        <div class="col-6">
                            <div>
                                <label for="">bonus_licence_1</label>
                                <input value="{{$master->bonus_licence_1}}" name="bonus_licence_1" type="text">
                            </div>
                            <div>
                                <label for="">bonus_licence_2</label>
                                <input value="{{$master->bonus_licence_2}}" name="bonus_licence_2" type="text">
                            </div>
                            <div>
                                <label for="">bonus_licence_3</label>
                                <input value="{{$master->bonus_licence_3}}" name="bonus_licence_3" type="text">
                            </div>
                            <div>
                                <label for="">bonus_licence_4</label>
                                <input value="{{$master->bonus_licence_4}}" name="bonus_licence_4" type="text">
                            </div>
                            <div>
                                <label for="">bonus_licence_5</label>
                                <input value="{{$master->bonus_licence_5}}" name="bonus_licence_5" type="text">
                            </div>
                            <div>
                                <label for="">bonus_licence_6</label>
                                <input value="{{$master->bonus_licence_6}}" name="bonus_licence_6" type="text">
                            </div>
                        </div>
                    </center>
                    </div>
                </div>
                <hr>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-6">
                        <a href="{{route('home')}}"  class="btn btn-warning">{{ __('Retour au Dashboard')}}</a>
                        </div>
                        <div class="col-6 text-end">
                       <button type="submit" class="btn btn-primary">Modifier</button>
                        </div>
                    </div>
                </div>


            </form>













































                </div>
            </div>
        </div>
    </div>
</div>
@endsection