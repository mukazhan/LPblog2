<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () 
// {
//     return view('welcome');
// });

 Route::get('/about/{id?}', [TestController::class, 'about_page']);

 Route::get('/contacts', [TestController::class, 'contact_page']);

Route::resource('/test', ResController::class);

Route::get('/form', [TestController::class, 'form_page']);

Route::match(['get','post'], '/show', [TestController::class, 'show']);

Route::get('/index', InvController::class);

 Route::get('/index2', function () 
{
    return view('index2');
});



// Route::redirect('/index','admin/about');


// Route::get('/about/{id?}', function ($id=null) 
// {

//     return view('about', ['title'=>'About page']);
// })->where('id','[0-9]+');


// Route::group(['prefix'=>'admin/'], function()
// {
// 	Route::get('/about', function()
// 	{
// 		return view('about',  ['title'=>'About page']);
// 	});

// 	Route::get('/contacts', function () 
// 	{
// 		$data = array('title'=>'Contacts page');

//      	return view('contacts')->with($data);
// 	});

// });

// Route::get('/contacts', function () 
// {
// 	$data = array('title'=>'Contacts page');

//      return view('contacts')->with($data);
// });


