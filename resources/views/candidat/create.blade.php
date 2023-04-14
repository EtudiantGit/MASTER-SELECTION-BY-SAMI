<form action="{{ route('candidats.store') }}" method="post">
    @csrf
    Nom : 
    <input type="text" name="nom" id=""><br>
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