<?php

use App\Http\Controllers\SnippetController;
use App\Http\Controllers\UserController;
use App\Models\Snippet;
use Illuminate\Support\Facades\Route;

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

// Main page routes
Route::get('/', function () {
    // $snippets = auth()->user()->usersSnippets()->latest()->get();
    $snippets = Snippet::where('user_id', auth()->id())->get();
    return view('home', ['snippets' =>  $snippets]);
});
Route::get('dashboard', function() { 
    $snippets = Snippet::where('user_id', auth()->id())->get();
    return view('dashboard', ['snippets' =>  $snippets]); 
});

// Auth Routes 
Route::get('/register', function() { return view('register'); });
Route::post('/register', [UserController::class, 'register']);
Route::get('/login', function() { return view('login'); });
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout']);

// Snippet Routes
Route::post('/create-snippet', [SnippetController::class, 'createSnippet']);
Route::get('/edit-snippet/{snippet}', [SnippetController::class,  'showEditScreen']);
Route::put('/edit-snippet/{snippet}', [SnippetController::class,  'updatePost']);
Route::delete('/delete-snippet/{snippet}', [SnippetController::class,  'deletePost']);





