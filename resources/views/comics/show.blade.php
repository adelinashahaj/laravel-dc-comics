@extends('layouts.app')

@section('page-title', 'Lista dei formati di comics')
Comic: {{$comics->title}}


@section('content')
<img src="{{$comics->thumb}}" class="img-fluid" alt="{{$comics->title}}">
<h1>{{$comics->title}}</h1>
<h2>{{$comics->price}}</h2>


<a href="{{route('comics.index')}}" class="btn btn-secondary">Torna alla lista</a>
@endsection
