@extends('layouts.app')

@section('page-title')

@section('content')
<form method="POST" action="{{route('comics.store')}}">

    @csrf

    <div class="mb-3">
        <label for="title" class="form-label">Titolo:</label>
        <input type="text" class="form-control" id="src" name="title">
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Descrizione:</label>
        <input type="text" class="form-control" id="title" name="description">
    </div>

    <div class="mb-3">
        <label for="thumb" class="form-label">Url dell'immagine:</label>
        <input type="text" class="form-control" id="kind" name="thumb">
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="text" class="form-control" id="cooking_time" name="price">
    </div>

    <div class="mb-3">
        <label for="series" class="form-label">Serie:</label>
        <input type="text" class="form-control" id="weight" name="series">
    </div>

    <div class="mb-3">
        <label for="sale_date" class="form-label">Data:</label>
        <textarea class="form-control" id="description" name="sale_date"></textarea>
    </div>

    <div class="mb-3">
        <label for="type" class="form-label">Tipo:</label>
        <textarea class="form-control" id="description" name="type"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Salva</button>
</form>
@endsection
