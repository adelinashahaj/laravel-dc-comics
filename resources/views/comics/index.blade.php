@extends('layouts.app')

@section('page-title', 'Lista dei formati di comics')

@section('content')

<a href="" class="btn btn-primary">Crea nuovo formato di comics</a>

<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Titolo</th>
        <th scope="col">Tipo</th>
        <th scope="col">Azioni</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($comics as $comic)
            <tr>
                <td scope="row">{{$comic->id}}</td>
                <td>{{$comic->title}}</td>
                <td>{{$comic->type}}</td>
                <td>
                    <a class="btn btn-primary" href="{{route('comics.show', ['comic' => $comic->id])}}">Vedi</a>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>


@endsection
