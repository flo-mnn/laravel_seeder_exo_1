@extends('template.main')
@section('content')
<div class="d-flex justify-content-center align-items-center flex-column text-center">
    <div class="card bg-secondary text-white my-5" style="width: 18rem;">
        <img src="{{$company->image}}" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">{{$company->name}}</h5>
        <h6 class="card-subtitle mb-2 text-warning">{{$company->age}}</h6>
        <p  class="">{{$company->email}}</p>
        <p class="">{{$company->phone}}</p>
        <div class="w-100 border border-secondary" height="2"></div>
        <h5 class="card-title">Contact Person</h5>
        <h6 class="card-subtitle mb-2 text-light text-right">{{$company->contact_surname}}</h6>
        <h6 class="card-subtitle mb-2 text-light text-right">{{$company->contact_first}}</h6>
        <div class="w-100 border border-secondary" height="2"></div>

        <div class="d-flex justify-content-around">
            <a href="/companies/edit/{{$company->id}}" class=" btn btn-success">edit</a>
            <form action="/companies/delete/{{$company->id}}" method="post" class="">
                @csrf
                <button type="submit" class="btn btn-danger">delete</button>
            </form>
        </div>
        </div>
    </div>
    <div class="row my-5">
        <a href="/companies/all" class="btn btn-secondary">go back</a>
    </div>
</div>
@endsection