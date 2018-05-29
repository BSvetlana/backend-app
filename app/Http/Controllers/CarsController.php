<?php
// routes and methods
namespace App\Http\Controllers;
use App\Car;

use App\Http\Requests\CarRequest;
use Symfony\Component\HttpFoundation\JsonResponse;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Car[]| \Illuminate\Http\Response
     */
    public function index()
    {
        return Car::all();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  CarRequest  $request
     * @return Car
     */
    public function store(CarRequest $request)
    {
        $car = new Car();
 
        $car->brand = $request->input('brand');
        $car->model = $request->input('model');
        $car->year = $request->input('year');
        $car->maxSpeed = $request->input('maxSpeed');
        $car->isAutomatic = $request->input('isAutomatic');
        $car->engine = $request->input('engine');
        $car->numberOfDoors = $request->input('numberOfDoors');

        $car->save();
        return $car;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Car::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  CarRequest  $request
     * @param  int  $id
     * @return Car
     */
    public function update(CarRequest $request, $id)
    {
        $car = Car::find($id);
 
        $car->brand = $request->input('brand');
        $car->model = $request->input('model');
        $car->year = $request->input('year');
        $car->maxSpeed = $request->input('maxSpeed');
        $car->isAutomatic = $request->input('isAutomatic');
        $car->engine = $request->input('engine');
        $car->numberOfDoors = $request->input('numberOfDoors');

        $car->save();
        return $car;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Car::find($id);
        $car->delete();

        return new JsonResponse(true);
    }
}
