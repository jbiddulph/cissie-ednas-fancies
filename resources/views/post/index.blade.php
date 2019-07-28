@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Posts
                        <span class="float-right"><a href="{{route('post.create')}}">Create Post</a></span>
                    </div>

                    <div class="card-body">
                       <table class="table table-striped">
                            <thead>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Action</th>
                                <th>Delete</th>
                            </thead>
                           <tbody>
                           @foreach($posts as $post)
                                <tr>
                                    <td>{{$post->title}}</td>
                                    <td>{{$post->description}}</td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="{{route('post.edit',[$post->id])}}" class="btn btn-sm btn-warning">Edit</a>
                                            <a href="{{route('post.show',[$post->id])}}" class="btn btn-sm btn-secondary">Show</a>
                                        </div>
                                    </td>
                                    <td>
                                        <form action="{{route('post.delete',[$post->id])}}" method="post">@csrf
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                               @endforeach
                           </tbody>
                       </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
