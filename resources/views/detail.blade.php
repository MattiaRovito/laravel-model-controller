@extends('layouts.app')
@section('title','dc-comics')

@section('content')
    {{-- @dd($serie) --}}
    <div>
        <h2 class="white">{{ $serie->title }} </h2>
        
        <img src="{{ $serie['thumb']}}" alt="{{ $serie['title']}}">
        
        <p class="white">
            {{ $serie->description }}
        </p>
    </div>
@endsection
    

