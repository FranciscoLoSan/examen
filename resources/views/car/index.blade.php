@extends('layouts.app')
@section('contend')
<table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Brand</th>
        <th scope="col">Name</th>
        <th scope="col">Model</th>
        <th scope="col">Actions</th>
        <th scope="col"><a href="{{ url('/cars/create') }}" class="btn btn-success">Create</a></th>
      </tr>
    </thead>
    <tbody>
        @foreach ($cars as $car)
        <tr>
            <th scope="row">{{ $car->id }}</th>
            <td>
                @foreach ($brands as $brand)
                    @if($car->brand_id == $brand->id)
                        {{ $brand->name }}
                    @endif
                @endforeach

            </td>
            <td>{{ $car->name }}</td>
            <td>{{ $car->model }}</td>
            <td>
                <a class="btn btn-primary float-left" href="{{ url('cars', [$car->id]) }}"> Show </a>
                <a class="btn btn-warning float-left ml-1" href="{{ url('cars', [$car->id,'edit']) }}"> Edit </a>
                
                <form class="float-left ml-1" action="{{ url('cars/'.$car->id) }}" method="POST">
                    {{@method_field('DELETE')}}
                    @csrf
                    <button class="btn btn-danger"> Delete </button>
                </form>
            </td>
          </tr>
        @endforeach
      
    </tbody>
  </table>
  @endsection