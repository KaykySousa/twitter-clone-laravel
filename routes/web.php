<?php


use App\Models\TwitterUsers; 
// use App\Models\TwitterPosts; 
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

// app routes

Route::get('/', function () {
    return view('main');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/tweet', function () {
    return view('tweet');
});

// crud routes

// user
Route::post('/users', function (Request $request) {
    TwitterUsers::create([
        'name' => $request->name,
        'username' => $request->username,
        'email' => $request->email,
        'password' => $request->password,
    ]);

    return view('login');
});

Route::post('/login', function (Request $request) {
    $user = TwitterUsers::where('email', $request->email)->first();
    
    if ($user->password == $request->password) {
    // $posts = TwitterPosts::all();
        return view('main');
    } else {
        return redirect('/login');
    }
});