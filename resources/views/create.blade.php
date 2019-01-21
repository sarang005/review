@extends('layout')
@section('content')
<h1 class="text-center">Add New Blog</h1>
<div class="container">
            <div class="jumbotron">
                <form method="POST" action="/blogs">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" class="form-control" name="Title" placeholder="Enter Title"/>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea class="form-control " name="Description" placeholder="Enter Description" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                    <button type="reset" class="btn btn-danger">Clear</button>
                    @if ($errors->any())
                    <div class="alert alert-danger mt-3">
                        <ul>
                            @foreach ($errors->all() as $error )
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </form>
            </div>
        </div>
@endsection