@extends('layouts.admin')
@section('content')
  <div class="row">
     <div class="col">
        <h2 class="display-4">
            Add A Brand
        </h2>
     </div>
  </div>

  <div class="row">
    <div class="col">
        <form action="{{ route('brands.store') }}" method="POST">

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
              <label for="brandName">Brand Name</label>
              <input type="text" class="form-control" id="brandName" name="brandName" aria-describedby="brandName" placeholder="Brand Name">
            </div>
            <div class="form-group mb-3">
                <label for="brandImg">Image URL</label>
                <input type="text" class="form-control" id="brandImg" name="brandImg"  aria-describedby="brandImg" placeholder="Brand Img">
              </div>
            <button type="submit" class="btn btn-dark mb-3">Submit</button>
          </form>
     </div>
   </div>
    
@endsection