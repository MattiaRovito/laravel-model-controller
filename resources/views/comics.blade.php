@extends('layouts.app')
@section('title','Current Series')

@section('content')
    <h1>Current Series</h1>
    <div class="container">
        <div >
            @foreach($series as $serie)
            <div>
                
                <img src="{{ $serie['thumb']}}" alt="{{ $serie['title']}}">
                
                <h2>
                    <a href=""> {{ $serie['series']}} </a>
                </h2>
            </div>
                
            @endforeach
        </div>
    </div>
@endsection