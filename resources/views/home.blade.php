@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h4><div class="panel-heading">Welcome to FlutureTech Blog. Write your Posts here  {{Auth::user()->name}}</div></h4>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!<br/><br/>
                <a class="btn btn-info" href={{url('/posts/create')}}>Write a Post</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
