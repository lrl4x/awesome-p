<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//routes for pages
Route::get('/',[StaticController::class,'index'])->name('home.index');


//group route to prevents users from access any page without login ..
Route::group(['middleware'=>['AuthCheck']],function(){
   //static routes
   Route::get('/car',[StaticController::class,'car'])->name('index.car'); 
   Route::get('/contactus',[StaticController::class,'contactus'])->name('index.contactus');
   Route::get('/about',[StaticController::class,'about'])->name('index.about');
   //custom Login Routes
   Route::get('/login',[AuthController::class,'login'])->name('login');
   //custom Register Routes
   Route::get('/register',[AuthController::class,'register'])->name('register');
   //logout Route
   Route::get('/logout',[AuthController::class,'logout'])->name('logout');
});



 //custom Login Routes
Route::post('/login',[AuthController::class,'loginPost'])->name('login-Post');

//custom Register Routes

Route::post('/register',[AuthController::class,'registerPost'])->name('register-Post');



// cars views 
Route::get('cars/index/{carType}',[CarsController::class,'index'])->name('cars.index');
Route::get('cars/create',[CarsController::class,'create'])->name('cars.create');
Route::post('cars/store',[CarsController::class,'store'])->name('cars.store');
Route::get('cars/index/cars/show/{id}', [CarsController::class, 'show'])->name('cars.show');
Route::get('cars/index/cars/show/cars/index/cars/show/{id}/edit',[CarsController::class,'edit'])->name('cars.edit');
Route::put('cars/update/{id}',[CarsController::class,'update'])->name('cars.update');
Route::delete('cars/destroy/{id}',[CarsController::class,'destroy'])->name('cars.destroy');
Route::get('cars/search',[CarsController::class,'search'])->name('cars.search');

// //rousourse route for cars...
// Route::resource('cars',CarsController::class);



