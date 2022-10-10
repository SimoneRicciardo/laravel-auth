@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{route('admin.posts.update', ['post'=>$posts->id])}}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}" />
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <input type="text" class="form-control" id="content" name="content" value="{{old('content')}}" />
        </div>

        <button type="submit" class="btn btn-primary">Save</button>

    </form>
</div>

@endsection