@extends('layouts.app')

@section('content')
    <h1>
        Single Comic
    </h1>

    <table class="table">
        <thead>
          <tr>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            <tr>
                <td>Title</td>
                <td>{{ $comic->title }}</td>
            </tr>
            <tr>
                <td>Description</td>
                <td>{{ $comic->description }}</td>
            </tr>
            <tr>
                <td>Thumb</td>
                <td><img src="{{ $comic->thumb }}" alt=""></td>
            </tr>
            <tr>
                <td>Price</td>
                <td>{{ $comic->price }}</td>
            </tr>
            <tr>
                <td>Series</td>
                <td>{{ $comic->series }}</td>
            </tr>
            <tr>
                <td>Sale Date</td>
                <td>{{ $comic->sale_date }}</td>
            </tr>
            <tr>
                <td>Type</td>
                <td>{{ $comic->type }}</td>
            </tr>
            <tr>
                <td>Artists</td>
                <td>{{ $comic->artists }}</td>
            </tr>
            <tr>
                <td>Writers</td>
                <td>{{ $comic->writers }}</td>
            </tr>
        </tbody>
    </table>

@endsection