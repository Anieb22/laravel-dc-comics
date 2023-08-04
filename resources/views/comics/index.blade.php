@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
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
                      <button type="button" class="btn btn-danger"><a href="" class="link-underline link-underline-opacity-0 link-light"><i class="fas fa-trash-can"></i></a></button>
                      <button type="button" class="btn btn-warning"><a href="" class="link-underline link-underline-opacity-0 link-dark"><i class="fas fa-pen"></i></a></button>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection