@extends('layouts.app')



@section('content')
<div class="container">
    <a href="{{route('masters.create')}}" class="btn btn-primary">Nouveau Master</a>
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif


            @if(session()->has('status'))
                    <div class="alert alert-success">
                        {{ session()->get('status') }}
                    </div>
              @endif


        @forelse ($masters as $master)
            <div class="card">
                {{-- Master 1 --}}
                <div class="card-header">
                    <center>
                        <b>
                            {{ $master->title.' : Master '.$master->type->nom }}
                        </b>
                    </center>
                    <div class="row">
                        <div class="col-6">
                            <form action="{{route('masters.destroy',$master)}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">{{ __('Supprimer')}}</button>
                            </form>
                            </div>
                        <div class="col-6 text-end">
                         
                            
                            <a href="{{ route('masters.edit',$master) }}" class="btn btn-primary">{{ __('Modifier')}}</a>
                            
                             
                        </div> 
                    </div>
                </div>
                    
                <div class="card-body">
                    <p><b>Nombre total de candidatures :</b> {{ $master->candidats->count() }} </p>
                    <p><b>Nombre de Femmes :</b> {{ $master->candidats->where('sexe','=','FEMME')->count() }} </p>
                    <p><b>Nombre d'Hommes :</b> {{ $master->candidats->where('sexe','=','HOMME')->count() }}  </p>
                    <p><b>Nombre de Fonctionnaires :</b> {{ $master->candidats->where('situation','=','FONCTIONNAIRE')->count() }} </p>
                    <p><b>Liste des candidats :</b> <a href="#">Télécharger</a></p>
                </div>

            </div>
            <br><br>
        @empty
        <div class="alert alert-danger">
            <h3>{{__('Bonjour . Veuillez créer votre master')}}</h3>
        </div>
        @endforelse

        
            
       
             {{-- <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body"></div>
            </div> --}}
































        </div>
    </div>
</div>
@endsection
