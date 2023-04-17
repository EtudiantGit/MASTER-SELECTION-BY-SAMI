<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
     crossorigin="anonymous">
    <style>
        body{
            background: #e6e6e6;
        }
    </style>
  <title>Document</title>
</head>
<body>
    
<div class="row my-4">
    <div class="col-md-8 mx-auto">
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-user-graduate"> Candidature aux Masters de la FSO 2022-2023</i>
                </h3>
            </div>
            <div class="card-body">
                <form action="#" method="post" enctype="multipart/form-data">
                    @csrf
                    {{--  --}}
                    <div class="mb-3">
                       <label for="exampleFormControlInput1" class="form-label">Nom</label>
                       <input type="text" class="form-control" name="nom" id="">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Prenom</label>
                        <input type="text" class="form-control" name="prenom" id="">
                     </div>
                     <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">E-mail</label>
                        <input type="email" class="form-control" name="nom" id="">
                     </div>
                     <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Date de naissance</label>
                        <input type="date" class="form-control" name="date_naissance" id="">
                     </div>
                     <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">CIN</label>
                        <input type="text" class="form-control" name="cin" id="">
                     </div>
                     <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Apogee</label>
                        <input type="text" class="form-control" name="apogee" id="">
                     </div>
                     <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Numéro de téléphone</label>
                        <input type="text" class="form-control" name="telephone" id="">
                     </div>
                     <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nationalité</label>
                        <input type="text" class="form-control" name="nationalite" id="">
                     </div>
                     
                     <div class="mb-3">
                       <label for="" class="form-label">Sexe</label><br>
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="" class="form-label">Homme</label>
                      <input type="radio" name="sexe" value="homme" id="">&nbsp;&nbsp;&nbsp;
                      <label for="" class="form-label">Femme</label>
                      <input type="radio" name="sexe" value="femme" id="">
                     </div>

                    {{--  --}}
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Année Baccalauréat</label>
                        <input type="text" class="form-control" name="annee_bac" id="">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Annee d'inscription au dernier diplome </label> 
                        <input type="text" class="form-control" name="annee_last_dip" id="">
                    </div>
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Annee d'obtention de licence</label>
                        <input type="text" class="form-control" name="annne_obt_dip" id="">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Spécialié</label>
                          <input type="text" class="form-control" name="Spécialité" id="">
                      </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Université</label>
                        <select name="université" style="width: 100%;" >
                            <option value="UMP-Oujda" >UMP-Oujda</option>
                            <option value="UCA-Marrakech" >UCA-Marrakech</option>
                            <option value="UIZ-Agadir" >UIZ-Agadir</option>
                            <option value="UM5-Rabat" >UM5-Rabat</option>
                            <option value="UH2-Casablanaca" >UH2-Casablanaca</option>
                            <option value="UAE-Tanger" >UAE-Tanger</option>
                            <option value="UMI-Meknès" >UMI-Meknès</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Etablissement</label>
                          <input type="text" class="form-control" name="ets" id="">
                      </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Moyenne S1</label>
                        <input type="text" placeholder="Ex 12.000" class="form-control" name="note_s1" id="">
                    </div>
                    <div class="mb-3">
                       <label for="exampleFormControlInput1" class="form-label">Moyenne S2</label>
                        <input type="text" placeholder="Ex 12.000" class="form-control" name="note_s2" id="">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Moyenne S3</label>
                        <input type="text" placeholder="Ex 12.000" class="form-control" name="note_s3" id="">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Moyenne S4</label>
                        <input type="text" placeholder="Ex 12.000" class="form-control" name="note_s4" id="">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Moyenne S5</label>
                        <input type="text" placeholder="Ex 12.000" class="form-control" name="note_s5" id="">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Moyenne S6</label>
                        <input type="text" placeholder="Ex 12.000" class="form-control" name="note_s6" id="">
                    </div>
                
                
                
                    <!--session de semestre-->
                    <center>
                     <b  class="form-label">Avez-vous validé S1 en session ordinaire ?</b>  &nbsp;&nbsp;&nbsp;
                      <label for="option1">Oui</label>
                      <input type="radio" name="s1" value="oui" id="option1">
                      
                      <label for="option2">Non</label>
                      <input type="radio" name="s1" value="non" id="option2">
                  
                      <br>
                      <b>Avez-vous validé S2 en session ordinaire ?</b> &nbsp;&nbsp;&nbsp;
                      <label for="option3">Oui</label>
                      <input type="radio" name="s2" value="oui" id="option3">
                      
                      <label for="option4">Non</label>
                      <input type="radio" name="s2" value="non" id="option4">
                      <br>
                      <b>Avez-vous validé S3 en session ordinaire ?</b> &nbsp;&nbsp;&nbsp;
                      <label for="option5">Oui</label>
                      <input type="radio" name="s3" value="oui" id="option5">
                      
                      <label for="option6">Non</label>
                      <input type="radio" name="s3" value="non" id="option6">
                      <br>
                      <b>Avez-vous validé S4 en session ordinaire ?</b> &nbsp;&nbsp;&nbsp;
                      <label for="option7">Oui</label>
                      <input type="radio" name="s4" value="oui" id="option7">
                      
                      <label for="option8">Non</label>
                      <input type="radio" name="s4" value="non" id="option8">
                      <br>
                      <b>Avez-vous validé S5 en session ordinaire ?</b> &nbsp;&nbsp;&nbsp;
                      <label for="option9">Oui</label>
                      <input type="radio" name="s5" value="oui" id="option9">
                      
                      <label for="option10">Non</label>
                      <input type="radio" name="s5" value="non" id="option10">
                      <br>
                      <b>Avez-vous validé S6 en session ordinaire ?</b> &nbsp;&nbsp;&nbsp;
                      <label for="option11">Oui</label>
                      <input type="radio" name="s6" value="oui" id="option11">
                      
                      <label for="option12">Non</label>
                      <input type="radio" name="s6" value="non" id="option12">
                      <br>
                    </center>
                    <hr>
                
                    <!--fin session de semestre-->
                        <div class="mb-3">
                        <label class="form-label"><b>Choix de formation</b></label>
                        {{-- @foreach($masters as $master)
                       
                            <input type="checkbox" id="{{ $master->id }}" name="masters[]" value="{{ $master->id }}">
                            <label for="{{ $master->id }}">{{ $master->title }}</label>
                        </div>
                        @endforeach --}}
                    
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Dossier de candidature</label>
                        <input type="file" class="form-control" name="image">
                      </div>
                    <div class="mb-3">
                        <button class="btn btn-primary">Soummetre</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
crossorigin="anonymous"></script>
</body>
</html>


