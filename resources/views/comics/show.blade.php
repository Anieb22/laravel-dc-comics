@extends('layouts.app')
@section('content')
<div class="bg-primary" style="height: 100px"></div>
<div class="container">
    <div class="row">
        <div class="col-12" id="comics">
            <div class="col-12 position-absolute w-75" id="comic">
                <img src="{{ $comic->thumb }}" alt="" class="my-3">
            </div>
            <div class="col-8 bg-success d-flex flex-row mt-4 align-items-center border rounded border-0 p-2 justify-content-between">
                <section class="price d-flex flex-row">U.S.:
                <section class="text-white bold-text ms-1">{{$comic->price}}</section>
                </section>
                <div class="d-flex justify-content-end">
                <section class="me-1 price d-flex">AVAILABLE</section>
                </div>
            </div>
            <div class="col-12 d-flex flex-row justify-content-between">
                <div class="col-8 my-4">
                    <h1>{{$comic->price}}</h1>
                    <p class=".text-body-secondary" id="description">
                     {{$comic->price}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-light" style="height: 300px">
    <div class="container">
        <div class="row d-flex justify-content-between">
            <div class="col-6">
                <table class="table table-light" id="talent">
                        <thead>
                            <tr>
                            <th scope="col" colspan="4">
                                <h3>
                                    Talent
                                </h3>
                            </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row" colspan="2">Art by</th>
                            
                            <td class="text-primary">
                                {{ $comic->artists }}
                            </td>
                            </tr>
                            <tr>
                            <th scope="row" colspan="2">Writers</th>
                            <td class="text-primary">{{ $comic->writers }}</td>
                            </tr>
                            <tr>
                        </tbody>
                </table>
            </div>
            <div class="col-4">
                <table class="table table-light" id="talent">
                        <thead>
                            <tr>
                            <th scope="col" colspan="4">
                                <h3>
                                    Spec
                                </h3>
                            </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row" colspan="2">Series:</th>
                            
                                <td class="text-primary text-uppercase">
                                {{ $comic->series }}
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" colspan="2">U.S. Price</th>
                                <td>{{$comic->price}}</td>
                            </tr>
                            <tr>
                                <th scope="row" colspan="2">On Sale Date</th>
                                <td>{{$comic->sale_date}}</td>
                            </tr>
                        </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

@endsection