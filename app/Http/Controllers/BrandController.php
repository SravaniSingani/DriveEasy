<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBrandRequest;
use App\Http\Requests\UpdateBrandRequest;
use App\Models\Brand;
use App\Models\Car;
use Illuminate\Support\Facades\Auth;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        if(Auth::check()){
            return view('brands.index', ['brands' => Brand::all()]);
        }
        else{
            return view('index', [
                'brands' => Brand::all()
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('brands.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBrandRequest $request)
    {
        //
        Brand::create($request->validated());
        return redirect()->route('brands.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        //
        $cars = $brand->cars()->get();
        return view('brands.show', compact('brand', 'cars'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        //
        return view('brands.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBrandRequest $request, Brand $brand)
    {
        //
        $brand->update($request->validated());
        $cars = $brand->cars()->get();
        return view('brands.show', compact('brand', 'cars'));
    }

    /**
     * Remove the specified resource from storage.
     */

     public function trash($id){
        Brand::Destroy($id);
        return redirect() -> route('brands.index');
     }

    public function destroy(Brand $brand)
    {
        //
    }
}
