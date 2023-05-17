@extends('layouts.app')

@section('page-title')

@section('content')
<form method="POST" action="{{route('comics.update', ['comic'=>$comics->id])}}">

    @csrf

    @method('PUT')

    <div class="mb-3">
        <label for="title" class="form-label">Titolo:</label>
        <input type="text" class="form-control" id="title" name="title" value="{{$comics->title}}">
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Descrizione:</label>
        <textarea class="form-control" id="description" name="description">{{$comics->description}}</textarea>
    </div>

    <div class="mb-3">
        <label for="thumb" class="form-label">Url dell'immagine:</label>
        <input type="text" class="form-control" id="thumb" name="thumb" value="{{$comics->thumb}}" >
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="text" class="form-control" id="price" name="price"  value="{{$comics->price}}">
    </div>

    <div class="mb-3">
        <label for="series" class="form-label">Serie:</label>
        <input type="text" class="form-control" id="series" name="series"  value="{{$comics->series}}">
    </div>

    <div class="mb-3">
        <label for="sale_date" class="form-label">Data:</label>
        <input class="form-control" id="sale_date" name="sale_date"  value="{{$comics->sale_date}}">
    </div>

    <div class="mb-3">
        <label for="type" class="form-label">Tipo:</label>
        <input class="form-control" id="type" name="type"  value="{{$comics->type}}">
    </div>

    <button type="submit" class="btn btn-primary">Salva</button>
</form>
@endsection
