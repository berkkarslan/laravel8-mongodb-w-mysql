<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function create()
    {
        return view('brandcreate');
    }
    public function store(Request $request)
    {
        $brand=new Brand();
        $brand->name = $request->get('name');
        $brand->country = $request->get('country');        
        $brand->save();
        return redirect('brand')->with('success', 'Brand has been successfully added');
    }
    public function index()
    {
        $brands=Brand::all();
        return view('brandindex',compact('brands'));
    }
    public function edit($id)
    {
        $brand = Brand::find($id);
        return view('brandedit',compact('brand','id'));
    }
    public function update(Request $request, $id)
    {
        $brand= Brand::find($id);
        $brand->name = $request->get('name');
        $brand->country = $request->get('country');    
        $brand->save();
        return redirect('brand')->with('success', 'Brand has been successfully update');
    }
    public function destroy($id)
    {
        $brand = Brand::find($id);
        $brand->delete();
        return redirect('brand')->with('success','Brand has been  deleted');
    }
}
