@extends('layouts.app')
@section('content')
    <div class="jumbotron text-center">
    <h1>FlutureTech Blog</h1>
        <p>Built by Umesi Obusor Ezekiel</p>

    <p><a class="btn btn-primary" href="/login" role="button">Login to Post</a> <a class="btn btn-success" href="{{url('/posts')}}" role="button">View Posts</a></p>
    </div>
    </div>



@endsection



