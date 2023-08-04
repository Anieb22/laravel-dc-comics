@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 my-3">
                <button type="button" class="btn btn-primary">
                    <a href="{{ route('comics.index')}}" class="link-underline link-underline-opacity-0 link-light">Visualizza Fumetti</a>
                </button>
            </div>
        </div>
    </div>
@endsection