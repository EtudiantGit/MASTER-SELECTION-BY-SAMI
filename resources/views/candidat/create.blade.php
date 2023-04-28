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
        span {
        content: "*";
        color: red;
        margin-left: 5px;
        }
    </style>
  <title>Masters FSO</title>
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
                <form action="{{ route('candidats.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{--  --}}
                    <div class="mb-3">
                       <label for="exampleFormControlInput1" class="form-label">Nom <span>*</span></label>
                       <input type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" id="">
                       @error('nom')
                       <div class="invalid-feedback">{{ $errors->first('nom') }}</div>
                       @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Prenom <span>*</span></label>
                        <input type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" id="">
                        @error('prenom')
                        <div class="invalid-feedback">{{ $errors->first('prenom') }}</div>
                        @enderror
                     </div>
                     <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">E-mail <span>*</span></label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="">
                        @error('email')
                        <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                        @enderror
                     </div>
                     <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Date de naissance <span>*</span></label>
                        <input type="date" class="form-control @error('date_naissance') is-invalid @enderror" name="date_naissance" id="">
                        @error('date_naissance')
                        <div class="invalid-feedback">{{ $errors->first('date_naissance') }}</div>
                        @enderror
                     </div>
                     <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">CIN <span>*</span></label>
                        <input type="text" class="form-control @error('cin') is-invalid @enderror" name="cin" id="">
                        @error('cin')
                        <div class="invalid-feedback">{{ $errors->first('cin') }}</div>
                        @enderror
                     </div>
                     <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Apogee</label>
                        <input type="text" class="form-control @error('apogee') is-invalid @enderror" name="apogee" id="">
                        @error('apogee')
                        <div class="invalid-feedback">{{ $errors->first('apogee') }}</div>
                        @enderror
                     </div>
                     <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Numéro de téléphone <span>*</span></label>
                        <input type="text" class="form-control @error('telephone') is-invalid @enderror" name="telephone" id="">
                        @error('telephone')
                        <div class="invalid-feedback">{{ $errors->first('telephone') }}</div>
                        @enderror
                     </div>
                     <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nationalité <span>*</span></label>
                        <input type="text" class="form-control @error('nationalite') is-invalid @enderror" name="nationalite" id="">
                        @error('nationalite')
                        <div class="invalid-feedback">{{ $errors->first('nationalite') }}</div>
                        @enderror
                     </div>
                     <hr>
                     <div class="mb-3">
                       <label for="" class="form-label">Genre <span>*</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <label for="homme" class="form-label">Homme</label>
                      <input type="radio" class="@error('sexe') is-invalid @enderror" name="sexe" value="homme" id="homme">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <label for="femme" class="form-label">Femme</label>
                      <input type="radio" class="@error('sexe') is-invalid @enderror" name="sexe" value="femme" id="femme">
                      @error('sexe')
                        <div class="invalid-feedback">{{ $errors->first('sexe') }}</div>
                        @enderror
                     </div>
                     <hr>
                     <div class="mb-3">
                      <label for="" class="form-label">Vous etes <span>*</span> :</label>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <label for="fonctionnaire" class="form-label">Fonctionnaire</label>
                     <input type="radio" class="@error('situation') is-invalid @enderror" name="situation" value="fonctionnaire" id="fonctionnaire">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <label for="simpleEtudiant" class="form-label">Etudiant</label>
                     <input type="radio" class="@error('situation') is-invalid @enderror" name="situation" value="simpleEtudiant" id="simpleEtudiant">
                     @error('situation')
                        <div class="invalid-feedback">{{ $errors->first('situation') }}</div>
                        @enderror
                    </div>
                    <hr>
                    {{--  --}}
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Année Baccalauréat <span>*</span></label>
                        <input type="text" class="form-control @error('annee_bac') is-invalid @enderror" name="annee_bac" id="">
                        @error('annee_bac')
                        <div class="invalid-feedback">{{ $errors->first('annee_bac') }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Année d'inscription au dernier diplome  <span>*</span></label> 
                        <input type="text" class="form-control @error('annee_last_dip') is-invalid @enderror" name="annee_last_dip" id="">
                        @error('annee_last_dip')
                        <div class="invalid-feedback">{{ $errors->first('annee_last_dip') }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Année d'obtention de licence <span>*</span></label>
                        <input type="text" class="form-control @error('annee_obt_dip') is-invalid @enderror" name="annee_obt_dip" id="">
                        @error('annee_obt_dip')
                        <div class="invalid-feedback">{{ $errors->first('annee_obt_dip') }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Spécialié <span>*</span></label>
                          <input type="text" class="form-control @error('spécialité') is-invalid @enderror" name="spécialité" id="">
                          @error('spécialité')
                          <div class="invalid-feedback">{{ $errors->first('spécialité') }}</div>
                          @enderror

                      </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Université <span>*</span></label>
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
                        <label for="exampleFormControlInput1" class="form-label">Etablissement <span>*</span></label>
                          <input type="text" class="form-control @error('ets') is-invalid @enderror" name="ets" id="">
                          @error('ets')
                          <div class="invalid-feedback">{{ $errors->first('ets') }}</div>
                          @enderror
                      </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Moyenne S1 <span>*</span></label>
                        <input type="text" placeholder="Ex 12.000" class="form-control @error('note_s1') is-invalid @enderror" name="note_s1" id="">
                        @error('note_s1')
                        <div class="invalid-feedback">{{ $errors->first('note_s1') }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                       <label for="exampleFormControlInput1" class="form-label">Moyenne S2 <span>*</span></label>
                        <input type="text" placeholder="Ex 12.000" class="form-control @error('note_s2') is-invalid @enderror" name="note_s2" id="">
                        @error('note_s2')
                        <div class="invalid-feedback">{{ $errors->first('note_s2') }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Moyenne S3 <span>*</span></label>
                        <input type="text" placeholder="Ex 12.000" class="form-control @error('note_s3') is-invalid @enderror" name="note_s3" id="">
                        @error('note_s3')
                        <div class="invalid-feedback">{{ $errors->first('note_s3') }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Moyenne S4 <span>*</span></label>
                        <input type="text" placeholder="Ex 12.000" class="form-control @error('note_s4') is-invalid @enderror" name="note_s4" id="">
                        @error('note_s4')
                        <div class="invalid-feedback">{{ $errors->first('note_s4') }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Moyenne S5 <span>*</span></label>
                        <input type="text" placeholder="Ex 12.000" class="form-control @error('note_s5') is-invalid @enderror" name="note_s5" id="">
                        @error('note_s5')
                        <div class="invalid-feedback">{{ $errors->first('note_s5') }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Moyenne S6 <span>*</span></label>
                        <input type="text" placeholder="Ex 12.000" class="form-control @error('note_s5') is-invalid @enderror" name="note_s6" id="">
                        @error('note_s6')
                        <div class="invalid-feedback">{{ $errors->first('note_s6') }}</div>
                        @enderror
                    </div>
                
                
                
                    <!--session de semestre-->
                    <center>
                     <b  class="form-label">Avez-vous validé S1 en session ordinaire ? <span>*</span></b>  &nbsp;&nbsp;&nbsp;
                      <label for="option1">Oui</label>
                      <input type="radio" class="@error('s1') is-invalid @enderror" name="s1" value="oui" id="option1">
                      
                      <label for="option2">Non</label>
                      <input type="radio" class="@error('s1') is-invalid @enderror" name="s1" value="non" id="option2">
                      @error('s1')
                      <div class="invalid-feedback">{{ $errors->first('s1') }}</div>
                      @enderror
                      <br>
                      <b>Avez-vous validé S2 en session ordinaire ? <span>*</span></b> &nbsp;&nbsp;&nbsp;
                      <label for="option3">Oui</label>
                      <input type="radio" class="@error('s2') is-invalid @enderror" name="s2" value="oui" id="option3">
                      
                      <label for="option4">Non</label>
                      <input type="radio" class="@error('s2') is-invalid @enderror" name="s2" value="non" id="option4">
                      @error('s2')
                      <div class="invalid-feedback">{{ $errors->first('s2') }}</div>
                      @enderror
                      <br>
                      <b>Avez-vous validé S3 en session ordinaire ? <span>*</span></b> &nbsp;&nbsp;&nbsp;
                      <label for="option5">Oui</label>
                      <input type="radio" class="@error('s3') is-invalid @enderror" name="s3" value="oui" id="option5">
                      
                      <label for="option6">Non</label>
                      <input type="radio" class="@error('s3') is-invalid @enderror" name="s3" value="non" id="option6">
                      @error('s3')
                      <div class="invalid-feedback">{{ $errors->first('s3') }}</div>
                      @enderror
                      <br>
                      <b>Avez-vous validé S4 en session ordinaire ? <span>*</span></b> &nbsp;&nbsp;&nbsp;
                      <label for="option7">Oui</label>
                      <input type="radio" class="@error('s4') is-invalid @enderror" name="s4" value="oui" id="option7">
                      
                      <label for="option8">Non</label>
                      <input type="radio" class="@error('s4') is-invalid @enderror" name="s4" value="non" id="option8">
                      @error('s4')
                      <div class="invalid-feedback">{{ $errors->first('s4') }}</div>
                      @enderror
                      <br>
                      <b>Avez-vous validé S5 en session ordinaire ? <span>*</span></b> &nbsp;&nbsp;&nbsp;
                      <label for="option9">Oui</label>
                      <input type="radio" class="@error('s5') is-invalid @enderror" name="s5" value="oui" id="option9">
                      
                      <label for="option10">Non</label>
                      <input type="radio" class="@error('s5') is-invalid @enderror" name="s5" value="non" id="option10">
                      @error('s5')
                      <div class="invalid-feedback">{{ $errors->first('s5') }}</div>
                      @enderror
                      <br>
                      <b>Avez-vous validé S6 en session ordinaire ? <span>*</span></b> &nbsp;&nbsp;&nbsp;
                      <label for="option11">Oui</label>
                      <input type="radio" class="@error('s6') is-invalid @enderror" name="s6" value="oui" id="option11">
                      
                      <label for="option12">Non</label>
                      <input type="radio" class="@error('s6') is-invalid @enderror" name="s6" value="non" id="option12">
                      @error('s6')
                      <div class="invalid-feedback">{{ $errors->first('s6') }}</div>
                      @enderror
                      <br>
                    </center>
                    <hr>
                
                    <!--fin session de semestre-->
                        <div class="mb-3">
                        <label><b><u>Choix de formation </u></b><span>*</span></label><br>
                      </div>
                        @forelse($masters as $master)
                        &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;
                            <input type="checkbox" class="@error('masters') is-invalid @enderror"  id="{{ $master->id }}" name="masters[]" value="{{ $master->id }}">
                            <label for="{{ $master->id }}">{{ $master->title }}</label><br>
                        @empty
                            Aucun master n'est ouvert pour le moment.
                        @endforelse
                        @error('masters')
                        <div class="invalid-feedback">{{ $errors->first('masters') }}</div>
                        @enderror
                       
                    <br>
                    <hr>
                      <div class="mb-3">
                        <label><b><u>Dossier de candidature</u></b></label><br><br>
                        Veuillez importer sur un seul fichier pdf les documents suivants :<br>
                       
                        
                                <p> &nbsp;&nbsp;&nbsp; &nbsp;
                                     - Relevé de notes de S1 à S6.<br> &nbsp;&nbsp;&nbsp; &nbsp;
                                    - Copie certifiée conforme du diplome bac+2.<br> &nbsp;&nbsp;&nbsp; &nbsp;
                                    - Copie certifiée conforme du diplome bac+3.<br> &nbsp;&nbsp;&nbsp; &nbsp;
                                    - Copie certifiée conforme du baccalauréat. 

                                </p>
                    
                        <input type="file" class="form-control @error('file') is-invalid @enderror" name="file" required>
                        @error('file')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                      </div>
                      <div class="mb-3">
                            <div class="row">
                                <div class="col-6">
                                <a href="{{route('welcome')}}"  class="btn btn-warning">{{ __('<< Acceuill')}}</a>
                                </div>
                                <div class="col-6 text-end">
                               <button  type="submit" class="btn btn-primary">Soumettre</button>
                                </div>
                            </div>
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



































{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
     crossorigin="anonymous">
    <style>
        body{
            background: #eaf3f3;
        }
    </style>
  <title>Document</title> 
</head>
<body>
  @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
 @endif
  <form action="{{ route('candidats.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    Nom : 
    <input type="text" name="nom" id=""><br>
    Cin 
    <input type="text" name="cin" id=""><br>
    Année bac
    <input type="text" name="annee_bac" id=""><br>
    Annee d'inscription au dernier diplome 
    <input type="text" name="annee_last_dip" id=""><br>
    Annee d'obtention de licence
    <input type="text" name="annne_obt_dip" id=""><br>
    
    S1 :
    <input type="text" name="note_s1" id=""><br>
    S2 : 
    <input type="text" name="note_s2" id=""><br>
    S3 : 
    <input type="text" name="note_s3" id=""><br>
    S4 : 
    <input type="text" name="note_s4" id=""><br>
    S5 : 
    <input type="text" name="note_s5" id=""><br>
    S6 : 
    <input type="text" name="note_s6" id=""><br>



    <!--session de semestre-->
      Avez-vous validé s1 en session ordinaire : 
      <label for="option1">Oui</label>
      <input type="radio" name="s1" value="oui" id="option1">
      
      <label for="option2">Non</label>
      <input type="radio" name="s1" value="non" id="option2">
      <br>
      Avez-vous validé s2 en session ordinaire : 
      <label for="option3">Oui</label>
      <input type="radio" name="s2" value="oui" id="option3">
      
      <label for="option4">Non</label>
      <input type="radio" name="s2" value="non" id="option4">
      <br>
      Avez-vous validé s3 en session ordinaire : 
      <label for="option5">Oui</label>
      <input type="radio" name="s3" value="oui" id="option5">
      
      <label for="option6">Non</label>
      <input type="radio" name="s3" value="non" id="option6">
      <br>
      Avez-vous validé s4 en session ordinaire : 
      <label for="option7">Oui</label>
      <input type="radio" name="s4" value="oui" id="option7">
      
      <label for="option8">Non</label>
      <input type="radio" name="s4" value="non" id="option8">
      <br>
      Avez-vous validé s5 en session ordinaire : 
      <label for="option9">Oui</label>
      <input type="radio" name="s5" value="oui" id="option9">
      
      <label for="option10">Non</label>
      <input type="radio" name="s5" value="non" id="option10">
      <br>
      Avez-vous validé s6 en session ordinaire : 
      <label for="option11">Oui</label>
      <input type="radio" name="s6" value="oui" id="option11">
      
      <label for="option12">Non</label>
      <input type="radio" name="s6" value="non" id="option12">
      <br>



    <!--fin session de semestre-->
    
        <h2>Choisissez les filières Master auxquelles vous souhaitez postuler :</h2>
        @foreach($masters as $master)
        <div>
            <input type="checkbox" id="{{ $master->id }}" name="masters[]" value="{{ $master->id }}">
            <label for="{{ $master->id }}">{{ $master->title }}</label>
        </div>
        @endforeach
    
    <button type="submit">Envoyer</button>
  </form>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
crossorigin="anonymous"></script>
</body>
</html> --}}
