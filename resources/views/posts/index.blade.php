@extends('layouts.master')

@section('content')

    <div class="container">
        <div class="row">
            {{--all posts--}}
            @foreach($posts as $post)
                <div class="col-sm">
                    <h5 class="">{{$post->title}}</h5>
                    <p class="">{{$post->body}}</p>
                    <a href="/posts/{{$post->id}}">Viac...</a>
                </div>
            @endforeach
            {{--Facebook feed--}}
            <div class="col-sm border-dark">
                <div
                    class="fb-page"
                    data-href="https://www.facebook.com/Pansk%C3%BD-diel-Vertical-111271183950506"
                    data-tabs="timeline"
                    data-width=""
                    data-height=""
                    data-small-header="false"
                    data-adapt-container-width="true"
                    data-hide-cover="false"
                    data-show-facepile="true">
                    <blockquote
                        cite="https://www.facebook.com/Pansk%C3%BD-diel-Vertical-111271183950506"
                        class="fb-xfbml-parse-ignore"><a
                            href="https://www.facebook.com/Pansk%C3%BD-diel-Vertical-111271183950506">Panský diel
                            Vertical</a>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
@endsection
