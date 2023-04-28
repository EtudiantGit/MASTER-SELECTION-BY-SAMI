<h2>Liste des candidats au master {{ $master->title }}</h2>
<h3>Département {{$master->departement->nom}}</h3>
    <br>
    <table>
        <thead>
        <tr>
            <th><b>CIN</b></th>
            <th><b>NOM</b></th>
            <th><b>PRENOM</b></th>
            <th><b>E-mail</b></th>
            <th><b>Sexe</b></th>
            <th><b>Date de Naissance</b></th>
            <th><b>Téléphone</b></th>
            <th><b>Spécialité</b></th>
            <th><b>Type Diplome</b></th>
            <th><b>Etablissement</b></th>
            <th><b>SCORE</b></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($candidats as $candidat)
            <tr>
                <td>{{$candidat->cin}}</td>
                <td>{{$candidat->nom}}</td>
                <td>{{$candidat->prenom}}</td>
                <td>{{$candidat->email}}</td>
                <td>{{$candidat->sexe}}</td>
                <td>{{$candidat->date_naissance}}</td>
                <td>{{$candidat->telephone}}</td>
                <td>{{$candidat->spécialité}}</td>
                <td>{{$candidat->type_diplome}}</td>
                <td>{{$candidat->etablissement}}</td>
                <td>{{$candidat->pivot->score}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
