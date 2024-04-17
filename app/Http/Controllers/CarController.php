<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;
use App\Models\Car;
use App\Models\Brand;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('cars.index', ['cars' => Car::all()], ['brands' => Brand::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('cars.create', ['brands' => Brand::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCarRequest $request)
    {
        //
        // $car = Car::create($request->validated());
        // $car -> brands()->attach($request->brand);
        // return redirect()->route('cars.index');

        $carData = $request->validated();
        $carData['brand_id'] = $request->brand;
        $car = Car::create($carData);
        return redirect()->route('cars.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        //
        return view('cars.show', compact('car'), ['brands' => Brand::all()]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        //
        return view('cars.edit', compact('car'), ['brands' => Brand::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCarRequest $request, Car $car)
    {
        //
        $car->update($request->validated());
        $car->brand_id = $request->brand;
        $car->save();
        return view('cars.show', compact('car'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function trash($id){
        Car::Destroy($id);
        return redirect() -> route('cars.index');
     }

    public function destroy(Car $car)
    {
        //
    }
}
