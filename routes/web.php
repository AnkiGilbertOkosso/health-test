<?php
use App\Http\Controllers\CalorieController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataFeedController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DiaryController;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\FoodIntakeController;
use App\Http\Controllers\MealController;

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
    return view('pages/web/home');
})->name('home');
Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');
// Route::redirect('/', 'login');

// Route::middleware(['auth'])->group(function () {
//     Route::resource('diaries', DiaryController::class);
//     Route::resource('diaries.meals', MealController::class);
// });

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    // Route for the getting the data feed
    Route::get('/json-data-feed', [DataFeedController::class, 'getDataFeed'])->name('json_data_feed');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::fallback(function() {
        return view('pages/utility/404');
    });

    Route::post('/calorie/goal', [CalorieController::class, 'create'])->name('calorie.goal');
    Route::get('/net-calories', [CalorieController::class, 'calculateNetCalories'])->name('net.calories');
    Route::get('/food-intake', [FoodIntakeController::class, '__invoke'])->name('food-intake');
    Route::get('/exercise1', [ExerciseController::class, 'create'])->name('exercise');
    Route::get('/exercise', [ExerciseController::class, 'fetchInsert'])->name('exercise');

});
