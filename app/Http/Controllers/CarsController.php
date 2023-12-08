<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Models\Car;
use Illuminate\Support\Facades\DB;

class CarsController extends Controller
{
    public function index($carType)
    {
        //make the String of carType to lower case
       
            $carBrand = strtolower($carType);
          
            return view('cars.index', [
                'cars' => DB::table('car')->where('name', $carBrand)->get()
            ]);
      




    }


    public function create()
    {

        return view('cars.create');


    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'phone' => 'required',
            'region' => 'required',
            'price' => 'required',
            'image' => 'required|mimes:jpg,png,jped|max:5048',
        ]);

        $newImageName = uniqid() . '_' . $request->title . '.' . $request->image->extension();

        $request->image->move(public_path('images'), $newImageName);


        Car::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'phone' => $request->input('phone'),
            'region' => $request->input('region'),
            'price' => $request->input('price'),
            'image_path' => $newImageName,
            'user_id' => auth()->user()->id
        ]);
        return redirect('car');
    }


    public function show($id)
    {


        return view('cars.show')
            ->with('car', Car::where('id', $id)->first());


    }
    public function edit($id)
    {
        // return view('cars.edit');
        return view('cars.edit', [
            'cars' => DB::table('car')->where('id', $id)->first()
        ]);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'phone' => 'required',
            'region' => 'required',
            'price' => 'required|string|max:10',
            'image' => 'required|mimes:jpg,png,jped|max:5048',
        ]);


        Car::where('id', $id)->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'phone' => $request->input('phone'),
            'region' => $request->input('region'),
            'price' => $request->input('price'),
            'user_id' => auth()->user()->id
        ]);
        return redirect(route('cars.show'));
    }


    public function destroy($id)
    {
        Car::where('id', $id)->delete();
        return redirect('car')
            ->with('message', 'done');
    }
         
    public function search(Request $request)
    {
        $car =new Car();
        if (isset($_GET['query'])) {
            $search = $_GET['query'];
   
            $query = DB::table('car')->where('description', 'LIKE', '%' . $search . '%')->get();                 
          
            return view('cars.search', [
                'cars' => $query
            ]);

        } else {
            return view('cars.index');
        }
    }         
}