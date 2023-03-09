<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\listingData;
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
//ALL listing
Route::get('/', function () {
    return view('listings',[
        'heading' => 'latest listing',
        'listings' =>listingData::all()
    ]);
});

//single listing
Route::get('/listings/{id}',function($id){
    return view('listing',
    [
            'listing'=>listingData::find($id)
    ]);
});

// Route::get('/demo', function(){
//     return response('<h1>this is demo</h1>') 
//              ->header('Content-type','text/plane')
//              ->header('foo','bar');
// });


// Route::get('/posts/{id}',function($id){
//     dd($id);
//     return response('Post'.$id);
// })->where('id','[0-9]+');

// Route::get('/search' , function(Request $request){
//     return $request->name.' ' .$request->city;
// });