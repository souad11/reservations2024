@extends('layouts.main')

@section('title', 'Liste des shows')

@section('content')
    <h1>Liste des {{ $resource }}</h1>

    <table>
        <thead>
            <tr>
                <th>Slug</th>
                <th>Titre</th>
                <th>Description</th>
                <th>URL de l'affiche</th>
            </tr>
        </thead>
        <tbody>
        @foreach($show as $s)
            <tr>
                <td>{{ $s->slug }}</td>
                <td>{{ $s->title }}</td>
                <td>{{ $s->description }}</td>
                <td>
                    <img src="{{ $s->poster_url }}" alt="poster" style="width: 100px; height: auto;">
                    <!-- Ou juste afficher l'URL si vous ne voulez pas afficher l'image -->
                    <!-- {{ $s->poster_url }} -->
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
