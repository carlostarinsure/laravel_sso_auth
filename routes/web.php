<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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

Route::get('/', function () {
    return view('welcome');
});

//Route::post('/register', function (Request $request) {
//    $validator = Validator::make($request->all(), [
//        'name' => 'required|string|max:255',
//        'email' => 'required|string|email|max:255|unique:users',
//        'password' => 'required|string|min:8',
//    ]);
//
//    if ($validator->fails()) {
//        return response()->json(['errors' => $validator->errors()], 422);
//    }
//
//    $user = User::create([
//        'name' => $request->name,
//        'email' => $request->email,
//        'password' => Hash::make($request->password),
//    ]);
//
//    return response()->json(['user' => $user], 201);
//});
//
//Route::post('/login', function (Request $request) {
//    $credentials = $request->only('email', 'password');
//
//    if (Auth::attempt($credentials)) {
//        $user = Auth::user();
//        $token = $user->createToken('access-token')->accessToken;
//
//        return response()->json(['token' => $token], 200);
//    }
//
//    return response()->json(['error' => 'Invalid credentials'], 401);
//});
//
//Route::get('/sso', function (Request $request) {
//    $token = $request->query('token');
//
//    // Authenticate the user using the token
//    $user = User::where('remember_token', $token)->first();
//
//    if (!$user) {
//        return response()->json(['error' => 'Invalid token'], 401);
//    }
//
//    // Log in the user and redirect to the client app
//    Auth::login($user);
//    return redirect($request->query('redirect_uri'));
//});
//
//Route::get('/login', function (Request $request) {
//    $redirect_uri = urlencode($request->query('redirect_uri'));
//
//    // Redirect to the authentication server
//    return redirect('http://auth-server/sso?redirect_uri=' . $redirect_uri . '&token=' . Auth::user()->getRememberToken());
//})->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
