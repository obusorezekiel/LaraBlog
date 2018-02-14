@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Posts<h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
        <div class="well">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                    <small>Written on {{$post->created_at}} </small>
                </div>
            </div>
        </div>
        @endforeach
        {{$posts->links()}}
        @else
        <p> No posts found</p>
    @endif
</div>
@endsection