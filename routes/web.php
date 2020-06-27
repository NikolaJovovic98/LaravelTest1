<?php

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
    return view('welcome');
});



Route::get('/contact', function () {
    return view('contact');
});


Route::get('/articles','ArticlesController@index'); //Za prikazivanje svih artikala
Route::post('/articles','ArticlesController@store');//Za skladistenje novog artikla
Route::get('/articles/create','ArticlesController@create');//Za kreiranje novog artikla
Route::get('/articles/{article}','ArticlesController@show'); //Za prikazivanje jednog artikla
Route::get('/articles/{article}/edit','ArticlesController@edit');//Za editovanje jednog artika
Route::put('/articles/{article}','ArticlesController@update');


Route::get('/about', function () {

    return view('about',
    [
        "articles" => App\Article::take(3)->latest()->get()

    ]);
});







/*
Route::get('test', function () {

    $name=request('name');


   return view('test', [

      'name' => $name


   ]);
});
*/



/*
Route::get('/post/{post}', function ($post) {

    $posts = [

        'my-first-post' => "Hello this is my first post!!",
        'my-second-post'=>"Well..now i am getting used to this i think"



    ];

    if(! array_key_exists($post,$posts)){


        abort(404,"Sorry it does not exist");

    }

    return view('post',[

        'post' => $posts[$post]


    ]);

});

*/
