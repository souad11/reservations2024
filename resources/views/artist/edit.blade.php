@extends('layouts.main')

@section('title', 'Modifier un artiste')

@section('content')
    <h2>Modifier un artiste</h2>

    <form action="{{ route('artist.update' ,$artist->id) }}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="firstname">Prénom</label>
            <input type="text" id="firstname" name="firstname">
        </div>

        <div>
            <label for="lastname">Nom</label>
            <input type="text" id="lastname" name="lastname">
        </div>

        <button>Modifier</button>
   <a href="{{ route('artist.show',$artist->id) }}">Annuler</a>
    </form>

    <nav><a href="{{ route('artist.index') }}">Retour à l'index</a></nav>
@endsection
