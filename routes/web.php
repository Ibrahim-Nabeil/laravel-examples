<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SectionController;
// form
use App\Http\Controllers\FormController;
// image
use App\Http\Controllers\ImageController;
// crud using ajax
use App\Http\Controllers\ajaxController;
// crud using ajax
use App\Http\Controllers\ajaxFunctionController;
//  form validation
use App\Http\Controllers\FormValidationController;
//  change gender using accessor 
use App\Http\Controllers\UserAccessorMutatorsController;
// event get viewers 
use App\Http\Controllers\EventTestController;
// pagination
use App\Http\Controllers\PaginationController;
// write tips in this page
use App\Http\Controllers\TipsController;
// send email using laravel mail
use App\Http\Controllers\MailController;
// contact us
use App\Http\Controllers\ContactUsController;
// search using livewire
use App\Http\Controllers\SearchWitheLivewireController;
// 
use App\Http\Controllers\ManyToManyController;








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



Route::get('removeProducts',[ManyToManyController::class, 'removeProducts']);
// 
Route::get('addProducts',[ManyToManyController::class, 'addProducts']);

// contact us form 
Route::get('get',[ManyToManyController::class, 'get']);
// contact us form 
Route::get('livewireSearche',[SearchWitheLivewireController::class, 'livewireSearche']);
// contact us form 
Route::get('contactUsForm',[ContactUsController::class, 'contactUsForm']);
// contact us save data 
Route::get('contactUsSave',[ContactUsController::class, 'contactUsSave']);
// session
Route::get('sendEmail',[MailController::class, 'sendEmail']);
// session
Route::get('index',[SectionController::class, 'index']);
// tips controller
Route::get('tips',[TipsController::class, 'tips']);
// pagination
Route::get('pagination',[PaginationController::class, 'pagination']);
// event get viewers if window loding
Route::get('event',[EventTestController::class, 'event']);
// form validation
Route::get('formValidationCreate',[FormValidationController::class, 'formValidationCreate']);
Route::get('formValidation',[FormValidationController::class, 'formValidation']);
// crud using ajax
Route::resource('ajax',ajaxController::class);
// form
Route::resource('form',FormController::class);
// image
Route::resource('save_image',ImageController::class);
// image
Route::resource('accessor',UserAccessorMutatorsController::class);











Route::get('getAll',[ajaxFunctionController::class,'getAll']);
Route::post('createItem',[ajaxFunctionController::class,'createItem']);
Route::post('deleteItem/{id}',[ajaxFunctionController::class,'deleteItem']);






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';






// if route not found will return this message
Route::fallback(function (){
    return 'This page not found';
});