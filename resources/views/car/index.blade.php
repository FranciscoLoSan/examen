<div class="container">

            <table  class="display table table-striped " style="width:100%">
                <thead>
                <tr>
                <th>Brand</th>
                <th>Name</th>
                <th>Model</th>
                <th>Opciones</th> 
                </tr>
                </thead>
                <tbody>
                @foreach ($car as $carData)
              
                <td>{{ $carData->brand_id }}</td>
                <td>{{ $carData->name}}</td>
                <td>{{ $carData->model }}</td>
                <td>
                   @can('VerVivienda')
                   <a class="btn btn-round blue darken-4" href="{{ url('vivienda', [$carData->encode_id]) }}"><i class="mdi mdi-face text-center" style="color: white;"></i> </a>
                   @endcan
                  @can('EditarVivienda')
                   <a class="btn btn-round blue darken-4" href="{{ url('vivienda', [$carData->encode_id,'edit']) }}"><i class="mdi mdi-pencil text-center" style="color: white;"></i> </a>
                 @endcan
                </td>
                </tr>
                @endforeach
                </tr>
                </tbody>                
            </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
  </div>