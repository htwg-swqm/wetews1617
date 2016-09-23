@extends('layouts.default')
@section('content')
    <div class="row">
        <h1>{{ $data->german_name }}(<em>{{$data->latin_name}}</em>)</h1>
        {{$data->description}}
        <h2>Standort</h2>
        {{$data->site}}
        <h2>Pflege</h2>
        {{$data->care}}


        <div class="row">
            <div class="col-sm-4"></div>
            <div id="myCarousel" class="carousel slide col-sm-4" data-ride="carousel">

                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    @foreach($data->images as $image)
                        <?php $active = '';?>
                        @if ($loop->first)
                            <?php $active = '';?>
                        @endif
                        <li data-target="#myCarousel" data-slide-to="{{$loop->iteration}}" class="{{$active}}"></li>
                    @endforeach
                </ol>

                <div class="carousel-inner" role="listbox">
                    @foreach($data->images as $image)
                        <?php $active = '';?>
                        @if ($loop->first)
                            <?php $active = 'active';?>
                        @endif
                        <div class="item {{$active}}">
                            <img src="{{$image->url}}">
                        </div>
                    @endforeach
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
@endsection