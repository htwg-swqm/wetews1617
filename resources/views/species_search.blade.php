@extends('layouts.default')
@section('css')
    <link href="../../css/species_search.css" rel="stylesheet">
@endsection
@section('content')
    <form action="/species_search" method="get">
        <div class="row">

            <h1>Pflanzensuche</h1>
            <div>
                <div class="col-xs-12 col-sm-4">
                    Name:
                </div>
                <div class="col-xs-12 col-sm-8">
                    <input type="text" name="german_name" value="{{$search_fields->german_name or ''}}" size="40">
                </div>
            </div>
            <div>
                <div class="col-xs-12 col-sm-4">
                    Lateinischer Name:
                </div>
                <div class="col-xs-12 col-sm-8">
                    <input type="text" name="latin_name" value="{{$search_fields->latin_name or ''}}" size="40">
                </div>
            </div>
            <div>
                <div class="col-xs-12 col-sm-4">
                    Merkmale:
                </div>
                <div class="col-xs-12 col-sm-8">
                    <input type="text" name="description" value="{{$search_fields->description or ''}}" size="50">
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-4">
                <input class="submit" type="submit" value="Suche">
            </div>
        </div>
    </form>

    <div class="row">
        @foreach($list as $species)
            <section class="col-sm-6 col-md-4">
                <div class="center-block">
                    <p><a href="species/{{$species->id}}">{{$species->german_name}}</a>
                        <BR>
                        {{$species->latin_name}}
                        <BR>
                        @if($species->images->count() > 0)
                            <img src="{{$species->images->first()->url}}">
                            <BR>
                        @endif
                    </p>
                    <p class="ellipsis search_result">
                        {{$species->description}}
                    </p>
                </div>
            </section>
        @endforeach
    </div>
@endsection