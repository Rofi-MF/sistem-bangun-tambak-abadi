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
Route::get('/login', 'AuthController@index')->middleware('guest')->name('login');
Route::post('/login', 'AuthController@login');
Route::get('/logout', 'AuthController@logout');
Route::get('/register', 'AuthController@register')->middleware('guest');
Route::post('/register', 'AuthController@registerSubmit');
Route::get('/selectBrand/{id}', 'MasterController@selectBrand');
Route::get('/selectDivision/{id}', 'MasterController@selectDivision');
Route::get('/selectDepartment/{id}', 'MasterController@selectDepartment');
Route::get('/selectSubDepartment/{id}', 'MasterController@selectSubDepartment');
Route::get('/selectSubRegion/{id}', 'MasterController@selectSubRegion');
Route::get('/test/{project}/{category}/{type}/{month}/{year}', 'TransactionController@test');

Route::middleware('auth')->group(function () {
    Route::get('/', 'TransactionController@index');
    Route::get('/user', 'MasterController@user');
    Route::get('/permission/{idRole}/{idUser}', 'MasterController@permission');
    Route::get('/role', 'MasterController@role');
    Route::get('/rolePermission/{id}', 'MasterController@rolePermission');
    Route::get('/project', 'MasterController@project');
    Route::get('/typeTransaction', 'MasterController@typeTransaction');
    Route::get('/transaction', 'TransactionController@inputTransaction');
    Route::get('/kasbon', 'TransactionController@kasbon');
    Route::get('/selectTypeTransaction/{category}', 'TransactionController@selectTypeTransaction');
    Route::get('/report/{project?}/{month?}/{year?}','ReportController@index');
    Route::get('/reportDetail/{id}','ReportController@reportDetail');
    Route::get('/inout/{project?}/{category?}/{type?}/{month?}/{year?}','ReportController@inout');
    Route::get('/exportKeseluruhan/{project}/{month}/{year}','ReportController@exportKeseluruhan');
    Route::get('/printKeseluruhan/{project}/{month}/{year}','ReportController@printKeseluruhan');
    Route::get('/exportInOut/{project}/{category}/{type}/{month}/{year}','ReportController@exportInOut');
    Route::get('/printInOut/{project}/{category}/{type}/{month}/{year}','ReportController@printInOut');
});


Route::post('/user', 'MasterController@userInsert');
Route::post('/changeRole','MasterController@changeRole');
Route::post('/givePermission','MasterController@givePermission');
Route::post('/revokePermission','MasterController@revokePermission');
Route::post('/role', 'MasterController@roleInsert');
Route::post('/giveRolePermission','MasterController@giveRolePermission');
Route::post('/revokeRolePermission','MasterController@revokeRolePermission');
Route::post('/project', 'MasterController@projectInsert');
Route::post('/typeTransaction', 'MasterController@typeTransactionInsert');
Route::post('/loadInput', 'TransactionController@loadInput');
Route::post('/transaction', 'TransactionController@transactionInsert');
Route::post('/kasbonBayar', 'TransactionController@kasbonBayar');
