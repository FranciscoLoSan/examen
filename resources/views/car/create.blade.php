@extends('welcome')
@section('contend')
<form action="{{ url('/cars/') }}" method="POST" role="form" id="main-form">
    @csrf
  <div class="card-body">
    <div class="form-group">
        <label for="exampleFormControlSelect1"> Brand </label>
        <select class="form-control" name="brand_id">
          
          @foreach ($brand as $brandData)
                <option value="{{ $brandData->id }}">{{ $brandData->name}} </option> 
        @endforeach
        </select>
      </div>

    <div class="form-group pading">
      <label class="font-weight-bolder" for="numero">Name</label>
      <input class="form-control" style="font-size: 15px;" id="nombre" name="name" placeholder="Nombre">
      <span class="missing_alert text-danger" id="numero_alert"></span>
    </div>
    <div class="form-group">
      <label class="font-weight-bolder" for="domicilio">Model</label>
      <input class="form-control" style="font-size: 15px;" id="descripcion" name="model" placeholder="Descripcion">
      <span class="missing_alert text-danger" id="last_name_alert"></span>
    </div>
  
    <input type="submit" class="btn btn-info" value="enviar">
  </form>
  
@endsection