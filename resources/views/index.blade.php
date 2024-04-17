@extends('layouts.navlogin');
@section('content')
<div class="row">
    <div class="col">
        <h1 class="display-3">
            Brands
        </h1>
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
              </div>
           
</div> 

      
      
 
    @endforeach
</div>
    
@endsection