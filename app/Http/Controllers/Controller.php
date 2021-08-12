<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Brand;

class Controller extends BaseController
{
    public function create()
    {
        $brands = Brand::all();
        return view('carcreate')->with('brands', $brands);
    }
    public function store(Request $request)
    {
        $car=new Car();
        $car->carcompany = $request->get('carcompany');
        $car->model = $request->get('model');
        $car->year = 2019;
        $car->price = $request->get('price');        
        $car->save();
        return redirect('car')->with('success', 'Car has been successfully added');
    }
    public function index()
    {
        $cars=Car::with('company')->get();
        return view('carindex',compact('cars'));
    }
    public function edit($id)
    {
        $car = Car::find($id);
        return view('caredit',compact('car','id'));
    }
    public function update(Request $request, $id)
    {
        $car= Car::find($id);
        $car->carcompany = $request->get('carcompany');
        $car->model = $request->get('model');
        $car->price = $request->get('price');        
        $car->save();
        return redirect('car')->with('success', 'Car has been successfully update');
    }
    public function destroy($id)
    {
        $car = Car::find($id);
        $car->delete();
        return redirect('car')->with('success','Car has been  deleted');
    }
}