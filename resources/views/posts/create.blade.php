@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="PostsController@store">
    <h2> Create Posts</h2>
    <label>Title</label>
    <input type="text" class="form-control" name="title" placeholder="Title of your Blog">
    
    <label>Body</label>
    <textarea  class="form-control" name="body" placeholder="Your Posts Here"/></textarea><br/>
    
    <input type="submit" class="btn btn-primary" value="Submit" name="submit"/>
    </form>
</div>


@endsection