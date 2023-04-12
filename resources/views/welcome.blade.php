@extends('layouts.master-page')
@section('body')
<center>
<h1>Bienvenue sur la platforme d'inscription aux master de la FSO<br><br><br><br>
    <a href="{{route('masters.create')}}"
    style="
        color:blue;
    ">Espace Coordonateur</a><br><br>
    <a href="{{route('candidats.create')}}"
    style="
        color:blue;
    ">Déposer ma candidature</a>

</h1>
</center>

@endsection

        