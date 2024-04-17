@extends('layouts.admin')
@section('content')
  <div class="row">
     <div class="col">
        <h2 class="display-4">
            Add A Car
        </h2>
     </div>
  </div>

  <div class="row">
    <div class="col">
        <form action="{{ route('cars.update', $car -> id) }}" method="POST">
            @method('PUT')
            @csrf
            @if ($errors -> any())
              <div class="alert alert-danger">
                <ul>
                    @foreach ($errors -> all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
              </div>
                
            @endif


            {{ csrf_field() }}
            <div class="form-group mb-3">
              <label for="model">Model</label>
              <input type="text" class="form-control" id="model" name="model" value="{{ $car -> model }}" aria-describedby="model" placeholder="Model">
            </div>
            <div class="form-group mb-3">
                <label for="year">Year</label>
                <input type="text" class="form-control" id="year" name="year" value="{{ $car -> year }}" aria-describedby="year" placeholder="Year">
              </div>
            <div class="form-group mb-3">
                <label for="carImg">Image URL</label>
                <input type="text" class="form-control" id="carImg" name="carImg" value="{{ $car -> carImg }}" aria-describedby="carImg" placeholder="Car Img">
            </div>
            <div class="form-group mb-3">
                <label for="brand" class="form-label">Select Brand</label>
                <select name="brand" id="brand">
                  @foreach ($brands as $brand)
                     <option value="{{ $brand -> id }}"> 
                      {{ $brand -> brandName }} 
                    </option>
                  @endforeach
                </select>
              </div>
            <button type="submit" class="btn btn-dark mb-3">Submit</button>
          </form>
     </div>
   </div>
    
@endsection