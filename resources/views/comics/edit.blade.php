@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 my-5">
            <form action="{{ route('comics.update', $comic->id) }}" method="post">
                @csrf

                @method('PUT')
                <div class="form-group my-2">
                    <label for="" class="control-label">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Titolo" value="{{ $comic->title}}">
                </div>
                <div class="form-group my-2">
                    <label for="" class="control-label">Serie</label>
                    <input type="text" class="form-control" id="series" name="series" placeholder="Serie" value="{{ $comic->series}}">
                </div>
                <div class="form-group my-2">
                    <label for="" class="control-label">Prezzo</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="Prezzo" value="{{ $comic->price}}">
                </div>
                <div class="form-group my-2">
                    <label for="" class="control-label">Immagine</label>
                    <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Inserisci un url" value="{{ $comic->thumb}}">
                </div>
                <div class="form-group my-2">
                    <label for="" class="control-label">Tipo</label>
                    <input type="text" class="form-control" id="type" name="type" placeholder="Tipo" value="{{ $comic->type}}">
                </div>
                <div class="form-group my-2">
                    <label for="" class="control-label">Artista/i</label>
                    <input type="text" class="form-control" id="artists" name="artists" placeholder="Artista/i" value="{{ $comic->artists}}">
                </div>
                <div class="form-group my-2">
                    <label for="" class="control-label">Scrittore/i</label>
                    <input type="text" class="form-control" id="writers" name="writers" placeholder="Scrittore/i" value="{{ $comic->writers}}">
                </div>
                <div class="form-group my-2">
                    <label for="" class="control-label">Descrizione</label>
                    <textarea class="form-control" id="description" name="description" placeholder="Descrizione">{{ $comic->description}}</textarea>
                </div>
                <div class="form-group my-2">
                    <button type="submit" class="btn btn-primary">Salva Modifiche</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection