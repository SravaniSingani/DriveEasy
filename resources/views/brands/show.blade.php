@extends('layouts.admin');
@section('content')
<div class="row">
    <div class="col">
    </div>
</div>

<div class="alert alert-secondary" role="alert">
    <h5 class="card-title"> {{ $brand -> brandName }}</h5>
 </div>


<div class="row">
    @foreach ($cars as $car)
      
        <div class="col-md-4">
            
            <div class="card" style="width: 18rem;">
                <a href="{{ route('cars.show', $car -> id) }}">
                <img class="card-img-top" style="height: 250px;" src="{{ $car -> carImg }}" alt="Card image cap">
                </a>
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
          
    @endforeach
</div>
    
@endsection