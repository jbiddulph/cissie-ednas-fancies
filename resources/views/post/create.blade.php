@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                @if(count($errors)>0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{$error}}</p>
                    @endforeach
                </div>
                @endif
                <div class="card">
                    <div class="card-header">New Post
                        <span class="float-right"><a href="{{route('post.list')}}">Posts</a></span>
                    </div>

                    <div class="card-body">

                            <form action="{{route('post.store')}}" method="POST">@csrf
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Description">Description</label>
                                    <textarea type="text" name="description" class="form-control"></textarea><br />
                                </div>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
