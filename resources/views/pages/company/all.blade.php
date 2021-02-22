@extends('template.main')
@section('content')
<div class="row my-4">
  {{-- en action, soit /companies/delete/all, soit /delete/all et l'uri deviendra automatiquement '/companies/delete/all' --}}
    <form action="delete/all" class="ml-auto" method="post">
        @csrf
        <button type="submit" class="btn btn-danger">delete all</button>
    </form>
</div>
<table class="table table-borderless table-dark">
    <thead>
      <tr>
        <th scope="col">Image</th>
        <th scope="col">Name</th>
        <th scope="col">Address</th>
        <th scope="col">Phone Number</th>
        <th scope="col">Email</th>
        <th scope="col">Contact's surname</th>
        <th scope="col">Contact's firstname</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
        @if (count($companies) == 0)
            <th colspan="8" class="text-center py-5 bg-light rounded m-3 text-secondary">You don't have any company yet</th>
        @else
          @foreach ($companies as $company)
            <tr>
                <th scope="row"><a  href="/companies/show/{{$company->id}}"><img src="{{$company->image}}" alt="" width="150"></a></th>
                <td class="my-auto">{{$company->name}}</td>
                <td class="my-auto">{{$company->address}}</td>
                <td class="my-auto">{{$company->phone}}</td>
                <td class="my-auto">{{$company->email}}</td>
                <td class="my-auto">{{$company->contact_surname}}</td>
                <td class="my-auto">{{$company->contact_first}}</td>
                <td class="my-auto"><a href="/companies/show/{{$company->id}}" class="btn btn-primary">details</a></td>
            </tr>
          @endforeach
        @endif
    </tbody>
  </table>
@endsection