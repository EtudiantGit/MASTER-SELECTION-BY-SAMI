@extends('layouts.master-page')
@section('body')
<center>
    @if (Session::has('num_dossier'))
    <div class="alert alert-success">
        Votre numéro de dossier est : {{ Session::get('num_dossier') }}
    </div>
@endif
<h2>Bienvenue sur la platforme d'inscription aux master de la FSO<br><br><br></h2>
<a href="{{route('login')}}" style="color:blue;">Espace Coordonateur</a><br><br>
<a href="{{route('candidats.create')}}" style="color:blue;">Déposer ma candidature</a><br><br>
<a href="{{route('login_candidat')}}" style="color:blue;">Suivre ma candidature</a>

</center>

@endsection

        