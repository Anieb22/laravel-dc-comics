@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 my-5">
            <form action="{{route('comics.store')}}" method="post">
                @csrf
                <div class="form-group my-2">
                    <label for="" class="control-label">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Titolo">
                </div>
                <div class="form-group my-2">
                    <label for="" class="control-label">Serie</label>
                    <input type="text" class="form-control" id="series" name="series" placeholder="Serie">
                </div>
                <div class="form-group my-2">
                    <label for="" class="control-label">Prezzo</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="Prezzo">
                </div>
                <div class="form-group my-2">
                    <label for="" class="control-label">Immagine</label>
                    <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Inserisci un url">
                </div>
                <div class="form-group my-2">
                    <label for="" class="control-label">Tipo</label>
                    <input type="text" class="form-control" id="type" name="type" placeholder="Tipo">
                </div>
                <div class="form-group my-2">
                    <label for="" class="control-label">Artista/i</label>
                    <input type="text" class="form-control" id="artists" name="artists" placeholder="Artista/i">
                </div>
                <div class="form-group my-2">
                    <label for="" class="control-label">Scrittore/i</label>
                    <input type="text" class="form-control" id="writers" name="writers" placeholder="Scrittore/i">
                </div>
                <div class="form-group my-2">
                    <label for="" class="control-label">Descrizione</label>
                    <input type="text-area" class="form-control" id="description" name="description" placeholder="Descrizione">
                </div>
                <div class="form-group my-2">
                    <button type="submit" class="btn btn-primary">Aggiungi Fumetto</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection