@extends('layouts.app')

@section('page-title')

@section('content')
<form method="POST" action="{{route('comics.update', ['comic'=>$comics->id])}}">

    @csrf

    @method('PUT')

    <div class="mb-3">
        <label for="title" class="form-label">Titolo:</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $comics->title)}}">
        @error('title')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Descrizione:</label>
        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ old('description',$comics->description)}} </textarea>
        @error('description')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
    </div>

    <div class="mb-3">
        <label for="thumb" class="form-label">Url dell'immagine:</label>
        <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" value="{{ old('thumb',$comics->thumb)}}" >
        @error('thumb')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price"  value="{{ old('price',$comics->price)}}">
        @error('price')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
    </div>

    <div class="mb-3">
        <label for="series" class="form-label">Serie:</label>
        <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series"  value="{{ old('series',$comics->series)}}">
        @error('series')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
    </div>

    <div class="mb-3">
        <label for="sale_date" class="form-label">Data:</label>
        <input class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date"  value="{{ old('sale_date',$comics->sale_date)}}">
        @error('sale_date')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
    </div>

    <div class="mb-3">
        <label for="type" class="form-label">Tipo:</label>
        <input class="form-control @error('type') is-invalid @enderror" id="type" name="type"  value="{{ old('type',$comics->type)}}">
        @error('type')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
    </div>

    <button type="submit" class="btn btn-primary">Salva</button>
</form>
@endsection
