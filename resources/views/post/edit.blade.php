@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Update Post</div>

                    <div class="card-body">
                        <form action="{{route('post.update',[$post->id] )}}" method="POST">@csrf
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" value="{{$post->title}}">
                            </div>
                            <div class="form-group">
                                <label for="Description">Description</label>
                                <textarea type="text" name="description" class="form-control">{{$post->description}}</textarea><br />
                            </div>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
