@extends('layout')
        @section('content')
        <div class="row mt-3"style="background:#FFA500">
          <div class="col-sm-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">{{$blogs->Title}}</h5>
                <p class="card-text">{{$blogs->Description}}</p>
              </div>
            </div>
          </div>
        </div>
        <div class="jumbotron mt-3" style="background:#FAF0E6">
        @if($blogs->comments)
        @foreach ($comments as $comment)
        <ul class="list-unstyled">
          <li class="media">
            <img src="..." class="mr-3" alt="...">
            <div class="media-body">
              <h5 class="mt-0 mb-1">Comments</h5>
              {{$comment->Comment}}
            </div>
          </li>
        </ul>
        @endforeach
        @else
        @endif
        </div>
        <div class="d-flex justify-content-center">
            {{ $comments->links() }}
        </div>        
        <div class="jumbotron mt-3">
        <small class="form-text text-muted">*Enter details to add comments</small>
          <form method="POST" action="/blogs/{{$blogs->id}}">
                @csrf
              <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" name="Name" placeholder="Enter Name">
              </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Comment</label>
            <textarea class="form-control"  placeholder="Enter Comment" name="Comment" rows="3"></textarea>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Email</label>
            <input type="email" class="form-control" name="Email" placeholder="Enter Email" required>
          </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Clear</button>
                @if ($errors->any())
                    <div class="alert alert-danger mt-3">
                        <ul>
                           @foreach ($errors->all() as $error )
                                <li>{{$error}}</li>
                           @endforeach
                        </ul>
                  </div>
              @endif
          </form>
          </div>
        </div>
        @endsection