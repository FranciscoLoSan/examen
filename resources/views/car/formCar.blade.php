@extends('layouts.app')
@section('contend')
<form action="{{ isset($car) ?  url('/cars/'.$car->id) : url('/cars/')}}" method="POST" role="form" id="main-form">
  @if (isset($car))
     {{method_field('PUT')}}    
  @endif  
  @csrf
  <div class="card-body">
    <div class="form-group">
        <label for="brand_id"> Brand </label>
        <select class="form-control" name="brand_id">
          
          @foreach ($brands as $brand)
                <option value="{{ $brand->id }}">{{ $brand->name}} </option> 
        @endforeach
        </select>
      </div>

    <div class="form-group pading">
      <label class="font-weight-bolder" for="name">Name</label>
      <input class="form-control" style="font-size: 15px;" id="name" name="name" value="@if(isset($car)) {{$car->name}} @endif" placeholder="Name">
    
    </div>
    <div class="form-group">
      <label class="font-weight-bolder" for="model">Model</label>
      <input class="form-control" style="font-size: 15px;" id="descripcion" name="model" value="@if(isset($car)) {{$car->model}} @endif" placeholder="Model">
    </div>
  
    <input type="submit" class="btn btn-info" value="enviar">
  </form>
  
@endsection