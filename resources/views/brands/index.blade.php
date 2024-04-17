@extends('layouts.admin');
@section('content')
<div class="row">
    <div class="col">
        <h1 class="display-3">
            Brands
        </h1>
    </div>
</div>
<div class="row">
<div class="col-md-4 mb-3">
    <a href="{{ route('brands.create') }}" class="card-link btn btn-lg btn-dark">Add</a>
</div>
</div>

<div class="row">
    @foreach ($brands as $brand)
      
        <div class="col-md-4 mb-3">
            
            <div class="card" style="width: 18rem;">
                <a href="{{ route('brands.show', $brand -> id) }}">
                <img class="card-img-top" style="height: 250px;" src="{{ $brand -> brandImg }}" alt="Card image cap">
                </a>
                <div class="card-body">
                  <h5 class="card-title"> {{ $brand -> brandName }}</h5>
                </div>
                <div class="card-body">
                    <a href="{{ route('brands.edit', $brand -> id) }}" class="card-link btn btn-dark">Edit</a>
                    <a href="{{ route('brands.trash', $brand -> id) }}" class="card-link btn btn-danger">Delete</a>
                 </div>
              </div>
           
          </div> 

      
      
 
    @endforeach
</div>
    
@endsection