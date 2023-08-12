<?php

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::prefix('v1')->group(function(){

    Route::get('/user',[UserController::class,'index']);
    Route::post('/user',[UserController::class,'store']);
    Route::get('/user/{id}',[UserController::class,'show']);
    Route::patch('/user/{id}',[UserController::class,'update']);
    Route::delete('/user/{id}',[UserController::class,'destroy']);


})->name('user');


Route::prefix('v1')->group(function(){

    Route::get('/post',[PostController::class,'index']);
    Route::post('/post',[PostController::class,'store']);
    Route::get('/post/{id}',[PostController::class,'show']);
    Route::patch('/post/{id}',[PostController::class,'update']);
    Route::delete('/post/{id}',[PostController::class,'destroy']);


})->name('post');

Route::prefix('v1')->group(function(){

    Route::get('/comment',[CommentController::class,'index']);
    Route::post('/comment',[CommentController::class,'store']);
    Route::get('/comment/{id}',[CommentController::class,'show']);
    Route::patch('/comment/{id}',[CommentController::class,'update']);
    Route::delete('/comment/{id}',[CommentController::class,'destroy']);


})->name('comment');








Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('users',function(Request $request){

return new JsonResponse([
'data'=>'Mohamed Saeed',

]);


});

// Route::get('/users/{id}',function(User $id){

//     return new JsonResponse([
//     'data'=>$id,

//     ]);
// });
