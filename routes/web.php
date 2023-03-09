<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('listings',[
        'heading' => 'latest listing',
        'listings' =>[
            [
                'id' => 1,
                'title' => 'listing one',
                'description' =>'Here is where you can register web routes for your application. These
                | routes are loaded by the RouteServiceProvider within a group which
                | contains the "web" middleware group. Now create something great!'

            ],
            [
                'id' => 2,
                'title' => 'listing two',
                'description' =>'Here is where you can register web routes for your application. These
                | routes are loaded by the RouteServiceProvider within a group which
                | contains the "web" middleware group. Now create something great!'

            ]
        ]
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