@extends('template.main')
@section('content')
<div class="row my-4">
    <form action="users/delete/all" class="ml-auto" method="post">
        @csrf
        <button type="submit" class="btn btn-danger">delete all</button>
    </form>
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Age</th>
        <th scope="col">Email</th>
        <th scope="col">Phone Number</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
        <tr>
            <th scope="row">{{$user->name}}</th>
            <td>{{$user->age}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->phone}}</td>
            <td><a href="/users/show/{{$user->id}}" class="btn btn-primary">details</a></td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection