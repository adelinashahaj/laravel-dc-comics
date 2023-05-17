@extends('layouts.app')

@section('page-title', 'Lista dei formati di comics')

@section('content')

<a href="{{route('comics.create')}}" class="btn btn-primary">Crea nuovo formato di comics</a>

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
                <td class="d-flex">
                    <a class="btn btn-primary me-2" href="{{route('comics.show', ['comic' => $comic->id])}}">Vedi</a>
                    <a class="btn btn-warning me-2" href="{{route('comics.edit', ['comic' => $comic->id])}}">Modifica</a>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{$comic->id}}">
                            Elimina
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal{{$comic->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                ...
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">NO</button>
                                <form action="{{route('comics.destroy', ['comic' => $comic->id])}}" method="POST">
                                    @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">SI</button>

                                    </form>

                                </div>
                            </div>
                            </div>
                        </div>

                </td>
            </tr>
        @endforeach
    </tbody>
  </table>






<!--
*********************************

un altro esempio con le card-->
<div class="row">
    @foreach ($comics as $comic)

    <div class="card mx-3 px-0 my-3 border-0 " style="width: 15rem; ">
        <img src="{{$comic->thumb}}" class="img-fluid rounded-top" alt="{{$comic->title}}">
        <div class="card-body ">
          <h5 class="card-title">{{$comic->title}}</h5>
          <p class="card-text">{{$comic->type}}</p>
          <a class="btn btn-primary" href="{{route('comics.show', ['comic' => $comic->id])}}">Vedi</a>
        </div>
      </div>
    @endforeach
</div>


@endsection
