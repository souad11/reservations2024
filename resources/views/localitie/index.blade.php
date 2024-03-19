@extends('layouts.main')

@section('title', 'Liste des localités')

@section('content')
    <h1>Liste des {{ $resource }}</h1>

    <table>
        <thead>
            <tr>
                <th>Localité</th>
            </tr>
        </thead>
        <tbody>
        @foreach($localities as $localitie)
            <tr>
                <td>{{ $localitie->postal_code }}</td>
                <td>{{ $localitie->locality }}</td>
                <td>
                    <a href="{{ route('localitie.show', $localitie->id) }}">Show</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
