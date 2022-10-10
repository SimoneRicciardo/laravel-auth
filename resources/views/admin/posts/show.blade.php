@extends('layouts.app')

@section('content')

<div class="container">

    <h2>Details: {{$posts->title}}</h2>


    <div><strong>Title:</strong> {{$posts->title}}</div>
    <div><strong>Slug:</strong> {{$posts->slug}}</div>
    <div><strong>Content:</strong> {{$posts->content}}</div>



    <a class="btn btn-primary" href="{{route('admin.posts.index')}}">Go Back</a>
</div>

@endsection