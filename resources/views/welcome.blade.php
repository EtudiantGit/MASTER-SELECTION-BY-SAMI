@extends('layouts.master-page')
@section('body')
<center>
<h2>Bienvenue sur la platforme d'inscription aux master de la FSO<br><br><br></h2>
<a href="{{route('masters.create')}}"
style="
    color:blue;
">Espace Coordonateur</a><br><br>
<a href="{{route('candidats.create')}}"
style="
    color:blue;
">Déposer ma candidature</a>

</center>

@endsection

        