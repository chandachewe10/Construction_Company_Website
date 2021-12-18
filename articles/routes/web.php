<?php
use App\Http\Controllers\articles;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


//Articles Route call view by admin

Route::get('/articles', function () {
    return view('makeArticle');
})->middleware(['auth'])->name('articles');


//General Building Articles View by client
Route::get('/general', [articles::class, 'general'])
                           ->name('general');



//Articles Route Submit
Route::post('/articles', [articles::class, 'articles'])
                ->middleware('auth')
                ->name('articles');


//View Contents

//Articles Route Get
Route::get('contents/{id}', [articles::class, 'contents']);











//General Works Articles View by client
Route::get('/works', [articles::class, 'works'])
                           ->name('works');


                           
//Works Route Get
Route::get('worksview/{id}', [articles::class, 'worksview']);



//projects Route Submit
Route::post('/projects', [articles::class, 'projects'])
                ->middleware('auth')
                ->name('projects');


                
//Works Route call view by admin

Route::get('/postworks', function () {
    return view('postworks');
})->middleware(['auth'])->name('postworks');



                
//Gallery Route call view by admin

Route::get('/gallery', function () {
    return view('gallery');
})->middleware(['auth'])->name('gallery');


               
//Gallery Route Submit by admin
Route::post('/gallery', [articles::class, 'gallery'])
                ->middleware('auth')
                ->name('gallery');




//viewgallery by client
Route::get('/viewgallery', [articles::class, 'viewgallery'])
                           ->name('viewgallery');                




//Get all clients and potential clients who subscribed for the email subscription to
//be recieving updates from InstaFinace Limited
Route::GET('/emailsub', [articles::class, 'emailsub'])
->middleware('auth')->name("emailsub");






                            

require __DIR__.'/auth.php';
