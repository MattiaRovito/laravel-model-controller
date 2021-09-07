@extends('layouts.app')
@section('title','dc-comics')

@section('content')
    {{-- @dd($serie) --}}
    <div>
        <h2>{{ $serie->title }} </h2>
        
        <img src="{{ $serie['thumb']}}" alt="{{ $serie['title']}}">
        
    </div>
@endsection
    

