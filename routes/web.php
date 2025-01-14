<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\psbController;
use App\Http\Controllers\psbNewController;
use App\Http\Controllers\AuthPsbController;
use App\Http\Middleware\CheckLogin;

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

Route::get('/', [homeController::class, 'index']);
Route::get('/program_kegiatan', [homeController::class, 'program_kegiatan']);
Route::get('/santri_aktif', [homeController::class, 'santri_aktif']);
Route::get('/pesantren', [homeController::class, 'pesantren']);
Route::get('psb/create',[psbController::class, 'create']);
Route::post('psb/get_kota',[psbController::class, 'get_kota']);
Route::post('psb/get_kecamatan',[psbController::class, 'get_kecamatan']);
Route::post('psb/get_kelurahan',[psbController::class, 'get_kelurahan']);
Route::post('/psb',[psbController::class, 'store']);
Route::get('/psb',[psbController::class, 'index']);
Route::post('psb/validation',[psbController::class, 'validation']);
Route::post('psb/send_wa_file',[psbController::class, 'send_wa_file']);
Route::get('psb/send_wa',[psbController::class, 'send_wa']);




//must login
Route::middleware([CheckLogin::class])->group(function () {
    Route::get('psb/data_pribadi',[psbNewController::class, 'data_pribadi']);
    Route::post('psb/update_data_pribadi',[psbNewController::class, 'update_data_pribadi']);
    Route::post('psb/update_data_walsan',[psbNewController::class, 'update_data_walsan']);
    Route::post('psb/update_data_asal_sekolah',[psbNewController::class, 'update_data_asal_sekolah']);
    Route::post('psb/update_data_berkas',[psbNewController::class, 'update_data_berkas']);
    Route::get('psb/upload_bukti',[psbNewController::class, 'upload_bukti_pembayaran']);
    Route::post('psb/simpan_bukti',[psbNewController::class, 'simpan_bukti_bayar']);
    Route::get('psb/cetak_formulir',[psbNewController::class, 'cetak_form']);
    Route::get('psb/save_pdf',[psbNewController::class, 'save_pdf']);
});


//Auth Route
Route::get('/login',[AuthPsbController::class,'login']);
Route::get('/forgot_password',[AuthPsbController::class,'forgot_password']);
Route::post('/forgot',[AuthPsbController::class,'proses_forget']);
Route::get('/logout',[AuthPsbController::class,'logout']);
Route::post('/login',[AuthPsbController::class,'proses_login']);
