@extends('template.main')
@section('content')
        <form action="/companies/update/{{$company->id}}" method="post" class="my-5 mx-auto p-5 border border-success rounded">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" name="name" value="{{$company->name}}">
              </div>
            <div class="form-group">
                <input type="number" class="form-control" name="age" value="{{$company->age}}">
              </div>
            <div class="form-group">
                <input type="text" class="form-control" name="phone" value="{{$company->phone}}">
              </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" value="{{$company->email}}">
              </div>
            <h5>Contact Person</h5>
            <div class="form-group">
                <input type="text" class="form-control" name="contact_surname" value="{{$company->contact_surname}}">
              </div>
            <div class="form-group">
                <input type="text" class="form-control" name="contact_first" value="{{$company->contact_first}}">
              </div>
            <div class="form-group">
                <input type="text" class="form-control" name="image" value="{{$company->image}}">
              </div>
            <button type="submit" class="btn btn-success">update</button>
            </form>
   
    <div class="row my-5">
        <a href="/companies/all" class="btn btn-secondary">go back</a>
    </div>
@endsection