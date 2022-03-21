<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;
use App\Http\Controllers\testController;
/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider.
|
| Feel free to customize them however you want. Good luck!
|
*/

Route::middleware([
    'web',
    InitializeTenancyByDomain::class,
    PreventAccessFromCentralDomains::class,
])->group(function () {
    Route::get('/', function () {
        //テナント内容
        //'tenant_model' => \App\Tenant::class, tenant_modelの値をここから見れるという寸法か
        //App\models\Tenant id:data:update_at:tenanc_db_name
        return 'これはマルチテナントアプリケーションです。現在のテナントのIDは ' . tenant('tenancy_db_name').' です。';
    });

    Route::group(['prefix'=>'test','as'=>'test.'],function(){
        //インプット画面表示
        Route::get('/view01',[testController::class,'view01'])->name('view01');
        //ZIPアップロード処理
        Route::POST('/zipUp',[testController::class,'zipUp'])->name('zipUp');
    });



});
