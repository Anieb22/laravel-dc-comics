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
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection