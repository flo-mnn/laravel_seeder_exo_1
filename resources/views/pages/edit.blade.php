@extends('template.main')
@section('content')
        <form action="/users/update/{{$user->id}}" method="post" class="my-5 mx-auto p-5 border border-success rounded">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" name="name" value="{{$user->name}}">
              </div>
            <div class="form-group">
                <input type="number" class="form-control" name="age" value="{{$user->age}}">
              </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" value="{{$user->email}}">
              </div>
            <div class="form-group">
                <input type="text" class="form-control" name="phone" value="{{$user->phone}}">
              </div>
            <button type="submit" class="btn btn-success">update</button>
            </form>
   
    <div class="row my-5">
        <a href="/" class="btn btn-secondary">go back</a>
    </div>
@endsection