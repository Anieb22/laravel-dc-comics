@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 my-5">
                <button type="button" class="btn btn-primary">
                    <a href="{{ route('comics.create') }}" class="link-underline link-underline-opacity-0 link-light">
                        Aggiungi Fumetto
                    </a>
                </button>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Titolo</th>
                      <th scope="col">Serie</th>
                      <th scope="col">Prezzo</th>
                      <th scope="col">Azioni</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($comics as $comic)
                    <tr>
                      <td>{{ $comic->id }}</td>
                      <td>{{ $comic->title }}</td>
                      <td>{{ $comic->series }}</td>
                      <td>{{ $comic->price }}</td>
                      <td>
                        <button type="button" class="btn btn-primary">
                            <a href="{{ route('comics.show', $comic->id) }}" class="link-underline link-underline-opacity-0 link-light">
                                <i class="fas fa-eye"></i>
                            </a>
                        </button>
                        <form action="{{ route('comics.destroy', ['comic' => $comic]) }}" method="post" class="d-inline">
                          @csrf
                          @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash-can"></i></button>
                        </form>
                      <button type="button" class="btn btn-warning"><a href="{{ route('comics.edit', ['comic' => $comic]) }}" class="link-underline link-underline-opacity-0 link-dark"><i class="fas fa-pen"></i></a></button>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection