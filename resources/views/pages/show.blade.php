@extends('template.main')
@section('content')
<div class="d-flex justify-content-center align-items-center flex-column">
    <div class="card bg-secondary text-white my-5" style="width: 18rem;">
        <div class="card-body">
        <h5 class="card-title text-center">{{$user->name}}</h5>
        <h6 class="card-subtitle mb-2 text-warning text-center">{{$user->age}}</h6>
        <p  class=" text-center">{{$user->email}}</p>
        <p class=" text-center">{{$user->phone}}</p>
        <div class="d-flex justify-content-around">
            <a href="/users/edit/{{$user->id}}" class=" btn btn-success">edit</a>
            <form action="/users/delete/{{$user->id}}" method="post" class="">
                @csrf
                <button type="submit" class="btn btn-danger">delete</button>
            </form>
        </div>
        </div>
    </div>
    <div class="row my-5">
        <a href="/" class="btn btn-secondary">go back</a>
    </div>
</div>
@endsection