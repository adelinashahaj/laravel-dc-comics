@extends('layouts.app')

@section('page-title', 'Lista dei formati di comics')
Comic: {{$comics->title}}


@section('content')
<h1>{{$comics->title}}</h1>


<a href="{{route('comics.index')}}" class="btn btn-secondary">Torna alla lista</a>
@endsection
