<?php
use App\Http\Controllers;
use App\Http\Controllers\TinhToanController;
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

// Route::get('/', function () {
//     $chieu_dai = 5;
//     $chieu_rong =4;
//     $dientich = $chieu_dai * $chieu_rong;
//     return 'Diện tích là: '. $dientich;
// });

// Route::get('/welcome',function(){
//     return "Chào mừng bạn đã đến với PNV";
// });
Route::get('/dienTich',[App\Http\Controllers\dienTich::class,'computeArea']);
Route::post('/dienTich',[App\Http\Controllers\dienTich::class,'computeArea']);

Route::get('/tinhToan',[TinhToanController::class, 'index']);
Route::post('/tinhToan',[TinhToanController::class, 'tong']);

Route::get('/', [App\Http\Controllers\UserController::class, 'xinchao']);
// Route::get('/',[PageController::class,'getContact'])->name('add-product'); // đặt tên định danh
// Route::get('/',[PageController::class,'getContact']);
?>