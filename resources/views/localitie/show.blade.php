@extends('layouts.main')

@section('title', 'Fiche d\'une localité')

@section('content')
    <h1>{{ $localitie->locality }}</h1>
    <nav><a href="{{ route('localitie.index') }}">Retour à l'index</a></nav>
@endsection
