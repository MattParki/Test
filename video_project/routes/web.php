<?php
use App\Http\Controllers\VideoController;
use App\Http\Controllers\VideoPriceController;
use App\Http\Controllers\HomeController;
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

//the name allows us to reference the routes, and doesn't take into account the fact its a get or post request
//naming also allows us to just reference the name and so we don't have to update each view file, just referencing
//the dynamic request in each view
//VideoController
Route::get('videos', [VideoController::class, 'index'])->name('videos.index')->middleware('auth');
Route::get('/videos/create', [VideoController::class, 'create'])->name('videos.create');
Route::post('/videos', [VideoController::class, 'store'])->name('videos.store');
//VideoPriceController
Route::post('/videos/creatingthevideo', [VideoPriceController::class, 'storeVideo'])->name('videos.storeVideo');
Route::get('/videos/createthevideo', [VideoPriceController::class, 'createVideo']);
Route::get('/videos/createthevideo/display', [VideoPriceController::class, 'display']);
Route::get('/videos/createthevideo/{id}', [VideoPriceController::class, 'show']);
Route::get('/videos/createthevideo/display/video_edit/{id}', [VideoPriceController::class, 'showVideoToEdit']);
Route::post('/videos/createthevideo/display/video_edit/{id}', [VideoPriceController::class, 'editVideo'])->name('videos.editVideo');

//Route::post('/videos/adm/pricecreate/{id}', [VideoController::class, 'showPrice'])->name('videos.showPrice')->middleware('auth');
Route::get('/videos/{id}', [VideoController::class, 'show'])->name('videos.show')->middleware('auth');
Route::delete('/videos/{id}', [VideoController::class, 'delete'])->name('videos.delete')->middleware('auth');


Auth::routes([
    'register' => true
]);

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
