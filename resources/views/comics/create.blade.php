@extends('layouts.app')

@section('content')
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" required>
        </div>
        <div>
            <label for="description">Description</label>
            <input type="text" name="description" required>
        </div>
        <div>
            <label for="thumb">Thumb</label>
            <input type="text" name="thumb" required>
        </div>
        <div>
            <label for="price">Price</label>
            <input type="text" name="price" required>
        </div>
        <div>
            <label for="series">Series</label>
            <input type="text" name="series" required>
        </div>
        <div>
            <label for="saledate">Sale date</label>
            <input type="date" name="saledate" required>
        </div>
        <div>
            <label for="type">Type</label>
            <input type="text" name="type">
        </div>
        <div>
            <label for="artists">Artists</label>
            <input type="text" name="artists">
        </div>
        <div>
            <label for="writers">Writers</label>
            <input type="text" name="writers">
        </div>
        <button type="submit">Submit</button>
    </form>
@endsection