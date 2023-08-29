<?php

use App\Http\Controllers\Page\PageController;
use App\Http\Middleware\Eightenplus\auth as eightenauth;
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

Route::middleware([eightenauth::class])->group(function(){
    Route::get('/',[PageController::class,'Safe']);

    ///Route::get('/registration', [RegistrationController::class, 'create']);


});
