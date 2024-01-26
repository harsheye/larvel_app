<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DeletedPostsController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// to route using the controller  
// This is the new Method
Route::get("/", [PagesController::class, 'index']);
Route::get("/about", [PagesController::class, 'about']);
Route::get("/services", [PagesController::class, 'services']);
Route::get('/posts/create', function(){
    return view('/posts/create_contactme');
});
Route::get('/posts/edit', function(){
    return view('/posts/edit_contactme');
});
Route::get("/posts/create_contactme", [PagesController::class, 'contactme']);
Route::get("/posts/edit_contactme", [PagesController::class, 'edit_contactme']);
Route::get("/posts/deletedposts", [DeletedPostsController::class, 'index']);




Route::resource("posts", PostController::class)->except('show');
Route::resource('deletedposts', DeletedPostsController::class);



Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

// // THis is the old method to use the controllers
// Route::get('/about','PageController@aobut');
// Route::get('/services','PageController@services');
// Route::get('/contact','PageController@contact');

// // to route to the file function
// Route::get("/", function(){
//     return view('index');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/services', function () {
//     return "this is the services page.";
// });




// Route::get('/users/{$id}/{$name}', function($id, $name){
//     return "This is the user id : ".$name ."with name" .$id;
// });