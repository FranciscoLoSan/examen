<?php

namespace App\Http\Controllers;

use App\Car;
use App\Brand;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $car = Car::get();;
        $brand = Brand::get();
        return view('car.index', ['cars' => $car, 'brands'=> $brand]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brand = Brand::get();

        return view('car.formCar', ['brands' => $brand]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $car = Car::create($request->all());

        $car = Car::get();;
        $brand = Brand::get();

        return redirect()->route('cars.index', ['cars' => $car, 'brands'=> $brand]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('car.show', ['car' => Car::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand = Brand::get();

        return view('car.formCar', ['brands' => $brand, 'car' => Car::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $car = Car::get();;
        $brand = Brand::get();

        $car = Car::findOrFail($id);
        $car->fill($request->all());
        $car->save();

        return redirect()->route('cars.index', ['cars' => $car, 'brands'=> $brand]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Car::destroy($id);
        
        $car = Car::get();
        $brand = Brand::get();

        return redirect()->route('cars.index', ['cars' => $car, 'brands'=> $brand]);
    }
}
