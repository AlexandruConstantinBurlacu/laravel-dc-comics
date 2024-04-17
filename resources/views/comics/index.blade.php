@extends('layouts.app')

@section('content')
    <h1>
        Comics List
    </h1>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Artists</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->artists }}</td>
                    <td><a href="{{ route('comics.show', $comic->id) }}">Vedi</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('comics.create') }}">Inserisci nuovo fumetto</a>
@endsection