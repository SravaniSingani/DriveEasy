@extends('layouts.admin');
@section('content')
<div class="row">
    <div class="col">
        <h1 class="display-3">
            Cars
        </h1>
    </div>
</div>

<div class="row">
      
        <div class="col-md-4">
            
            <div class="card" style="width: 18rem;">

                <img class="card-img-top" style="height: 250px;" src="{{ $car -> carImg }}" alt="Card image cap">
                
                <div class="card-body">
                  <h5 class="card-title"> {{ $car -> model }}</h5>
                  <h6 class="card-title"> {{ $car -> year }}</h6>
                  <h6 class="card-title">{{ $car->brand->brandName }}</h6>
                </div>
                <div class="card-body">
                    <a href="{{ route('cars.edit', $car -> id) }}" class="card-link btn btn-dark">Edit</a>
                    <a href="{{ route('cars.trash', $car -> id) }}" class="card-link btn btn-danger">Delete</a>
                 </div>
              </div>
          </div> 

</div>
    
@endsection