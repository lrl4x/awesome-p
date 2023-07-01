<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Car;
class CarsController extends Controller
{
    public function index(Request $request)
    {
       $car =$request->title;
        return view('cars.car-type.mercedes',[
            'car' => Car::where('title','=', $car) ,
            'title'=>'carname'
        ]);
      
    }

    
    public function create(Request $request)
    {
     
        return view('cars.create');
        
       
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'car'=>'required',
            'img'=>'required',
            'name'=>'required',
            'description'=>'required',
            'price'=>'required',
        ]);
        Car::create([
            'car'=>$request->input('slug'),
            'img'=>$request->input('img'),
            'name'=>$request->input('name'),
            'description'=>$request->input('description'),
            'price'=>$request->input('price')
        ]);
        return redirect('/mercedes');
    }

  
    public function show($car)
    {
        return view('cars.show');
    }

  
    public function edit($car)
    {
    return view('cars.edit')
    ->with('car',Car::where('car',$car)->first());
    }

    
    public function update(Request $request,$car)
    {
        $request->validate([
            'img'=>'required',
            'name'=>'required',
            'description'=>'required',
            'price'=>'required',
        ]);
        
        Car::where('car',$car)->update ([
            'img'=>$request->input('img'),
            'name'=>$request->input('name'),
            'description'=>$request->input('description'),
            'price'=>$request->input('price')
        ]);
        return redirect('/mercedes');
    }

    
    public function destroy(string $car)
    {
        Car::where('car',$car)->delete();
        return redirect('index.car')->with('message','done');
    }
    public function dan(Request $request, string $carType)
    {
        // make the String of carType to lower case
       $carBrand = strtolower($carType);

        return view('cars.show',[
            'carInfo' => Car::where('title', $carBrand)->get()->first(),
        ]);
    }
}
