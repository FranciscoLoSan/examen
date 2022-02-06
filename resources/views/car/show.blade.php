@extends('layouts.app')
@section('contend')
<div class="container">
    <div class="card">
        <a href="{{ url('/cars/') }}" class="btn btn-success">Back</a>
        <div class="card-body">
            <p class="card-title">{{ $car->name }}</p>
            <p class="card-text">{{ $car->brand_id == 1 ? 'Chevrolet' : 'Ford' }}</p>
            <p class="card-text">{{ $car->model }}</p>
            <a href="{{ url('cars', [$car->id,'edit']) }}" class="btn btn-warning float-left">Edit</a>
            <form class="float-left ml-1" action="{{ url('cars/'.$car->id) }}" method="POST">
                {{@method_field('DELETE')}}
                @csrf
                <button class="btn btn-danger"> Delete </button>
            </form>
        </div>
    </div>
</div>
@endsection