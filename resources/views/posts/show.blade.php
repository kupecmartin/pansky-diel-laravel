@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <h5 class="">{{$post->title}}</h5>
                <p class="">{{$post->body}}</p>
                <a href="#">Go somewhere</a>
            </div>
        </div>
    </div>
@endsection
