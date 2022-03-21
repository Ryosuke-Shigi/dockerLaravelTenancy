<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;
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
/* Route::group(['prefix'=>'test','as'=>'test.'],function(){
    //インプット画面表示
    Route::get('/view01',[testController::class,'view01'])->name('view01');
    //ZIPアップロード処理
    Route::POST('/zipUp',[testController::class,'zipUp'])->name('zipUp');
});
 */
