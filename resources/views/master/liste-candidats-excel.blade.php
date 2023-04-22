<h2>Liste des candidats au master {{ $master->title }}</h2>
<h3>Département {{$master->departement->nom}}</h3>
    <br>
    <table>
        <thead>
        <tr>
            <th>CIN</th>
            <th>NOM</th>
            <th>PRENOM</th>
            <th>E-mail</th>
            <th>Sexe</th>
            <th>Date de Naissance</th>
            <th>Téléphone</th>
            <th>Etablissement</th>
            <th>SCORE</th>
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
                <td>{{$candidat->etablissement}}</td>
                <td>{{$candidat->pivot->score}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
