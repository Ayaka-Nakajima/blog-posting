<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;  //外部にあるPostControllerクラスをインポート。
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

//Route::get('/posts', [PostController::class, 'index']);

Route::get('/', [PostController::class, 'index']);

Route::get('/posts/{post}', [PostController::class, 'show']);
// '/posts/{対象データのID}'にGetリクエストが来たら、PostControllerのshowメソッドを実行する

