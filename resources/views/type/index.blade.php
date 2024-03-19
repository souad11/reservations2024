@extends('layouts.main')

@section('title', 'Liste des types')

@section('content')
    <h1>Liste des {{ $resource }}</h1>

    <table>
        <thead>
            <tr>
                <th>Type</th>
            </tr>
        </thead>
        <tbody>
        @foreach($types as $type)
            <tr>
                <td>{{ $type->type }}</td>
                <td>
                    <a href="{{ route('type.show', $type->id) }}">Show</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
