@extends('layout')
@section('content')
<div class="container">
            <h1 class="text-center">Blogs</h1>
            @foreach ( $blogs as $blog )
            <div class="card ">
                <div class="card-header">
                    <a href="blogs/{{$blog->id}}/comments">{{ $blog->Title }}
                    </a>
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p>{{$blog->Description}}</p>
                        <footer class="blockquote-footer">
                            Created on
                            <cite title="Source Title">{{ $blog->created_at }}</cite>
                        </footer>
                    </blockquote>
                </div>
            </div>
            <br />
            @endforeach
            <div class="d-flex justify-content-center">{{ $blogs }}</div>
        </div>
@endsection