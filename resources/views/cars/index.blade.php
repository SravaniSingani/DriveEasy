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
    <div class="col-md-4 mb-3">
        <a href="{{ route('cars.create') }}" class="card-link btn btn-lg btn-dark">Add</a>
    </div>
    </div>

<div class="row">
    @foreach ($cars as $car)
      
        <div class="col-md-4 mb-3">
            
            <div class="card" style="width: 18rem;">
                <a href="{{ route('cars.show', $car -> id) }}">
                <img class="card-img-top" style="height: 230px;" src="{{ $car -> carImg }}" alt="Card image cap">
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