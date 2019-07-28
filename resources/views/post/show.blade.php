@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Viewing Post
                        <span class="float-right"><a href="{{route('post.list')}}">Posts</a></span>
                    </div>

                    <div class="card-body">
                        <p>Title: {{$post->title}}</p>
                        <p>Description: {{$post->description}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
