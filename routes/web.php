<?php

use App\Http\Controllers\CpuController;
use App\Http\Controllers\CpuCoolerController;
use App\Http\Controllers\GpuController;
use App\Http\Controllers\MotherboardController;
use App\Http\Controllers\PowerSupplyController;
use App\Http\Controllers\RamController;
use App\Http\Controllers\StorageController;
use App\Http\Controllers\TowerController;
use App\Http\Controllers\PcPartController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function(){
    return view('welcome');
});



//Route::resource("/cpu", CpuController::class);
//Route::resource("/gpu", GpuController::class);
//Route::resource("/ram", RamController::class);
//Route::resource('/tower', TowerController::class);
//Route::resource('/cpu_cooler', CpuCoolerController::class);
//Route::resource('/storage', StorageController::class);
//Route::resource('/power_supply', PowerSupplyController::class);
//Route::resource('/motherboard', MotherboardController::class);
Route::resource('/pc_part', PcPartController::class);
Route::post('/pc_part/create', [PcPartController::class, 'store']);




Auth::routes();
Route::get('/contact/{id}', [HomeController::class, 'contact']);
Route::get('/buy/{id}', [HomeController::class, 'buy']);
//cpu
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('/admin/home/cpu', [App\Http\Controllers\CpuController::class, 'index'])->name('index.cpu')->middleware('is_admin');
Route::get('/admin/home/cpu/create', [App\Http\Controllers\CpuController::class, 'create'])->name('create.cpu')->middleware('is_admin');
Route::post('/admin/home/cpu/store', [App\Http\Controllers\CpuController::class, 'store'])->name('store.cpu')->middleware('is_admin');
Route::get('/cpu/details/{id}', [App\Http\Controllers\CpuController::class, 'show'])->name('show.cpu.details');
Route::get('/cpu/edit/{id}', [App\Http\Controllers\CpuController::class, 'edit'])->name('edit.cpu')->middleware('is_admin');
Route::put('admin/home/cpu/{id}', [CpuController::class, 'update'])->name('cpu.update')->middleware('is_admin');
Route::put('/admin/home/cpu/update', [App\Http\Controllers\CpuController::class, 'update'])->name('update.cpu')->middleware('is_admin');
Route::delete('/admin/home/cpu/delete/{id}', [App\Http\Controllers\CpuController::class, 'destroy'])->name('delete.cpu')->middleware('is_admin');

//gpu
Route::get('/admin/home/gpu', [App\Http\Controllers\GpuController::class, 'index'])->name('index.gpu')->middleware('is_admin');
Route::get('/admin/home/gpu/create', [App\Http\Controllers\GpuController::class, 'create'])->name('create.gpu')->middleware('is_admin');
Route::post('/admin/home/gpu/store', [App\Http\Controllers\GpuController::class, 'store'])->name('store.gpu')->middleware('is_admin');
Route::get('/gpu/details/{id}', [App\Http\Controllers\GpuController::class, 'show'])->name('show.gpu.details');
Route::get('/gpu/edit/{id}', [App\Http\Controllers\GpuController::class, 'edit'])->name('edit.gpu')->middleware('is_admin');
Route::put('admin/home/gpu/{id}', [GpuController::class, 'update'])->name('gpu.update')->middleware('is_admin');
Route::put('/admin/home/gpu/update', [App\Http\Controllers\GpuController::class, 'update'])->name('update.gpu')->middleware('is_admin');
Route::delete('/admin/home/gpu/delete/{id}', [App\Http\Controllers\GpuController::class, 'destroy'])->name('delete.gpu')->middleware('is_admin');

//cpu_cooler
Route::get('/admin/home/cpu_cooler', [App\Http\Controllers\CpuCoolerController::class, 'index'])->name('index.cpu_cooler')->middleware('is_admin');
Route::get('/admin/home/cpu_cooler/create', [App\Http\Controllers\CpuCoolerController::class, 'create'])->name('create.cpu_cooler')->middleware('is_admin');
Route::post('/admin/home/cpu_cooler/store', [App\Http\Controllers\CpuCoolerController::class, 'store'])->name('store.cpu_cooler')->middleware('is_admin');
Route::get('/cpu_cooler/details/{id}', [App\Http\Controllers\CpuCoolerController::class, 'show'])->name('show.cpu_cooler.details');
Route::get('/cpu_cooler/edit/{id}', [App\Http\Controllers\CpuCoolerController::class, 'edit'])->name('edit.cpu_cooler')->middleware('is_admin');
Route::put('admin/home/cpu_cooler/{id}', [CpuCoolerController::class, 'update'])->name('cpu_cooler.update')->middleware('is_admin');
Route::put('/admin/home/cpu_cooler/update', [App\Http\Controllers\CpuCoolerController::class, 'update'])->name('update.cpu_cooler')->middleware('is_admin');
Route::delete('/admin/home/cpu_cooler/delete/{id}', [App\Http\Controllers\CpuCoolerController::class, 'destroy'])->name('delete.cpu_cooler')->middleware('is_admin');

//motherboard
Route::get('/admin/home/motherboard', [App\Http\Controllers\MotherboardController::class, 'index'])->name('index.motherboard')->middleware('is_admin');
Route::get('/admin/home/motherboard/create', [App\Http\Controllers\MotherboardController::class, 'create'])->name('create.motherboard')->middleware('is_admin');
Route::post('/admin/home/motherboard/store', [App\Http\Controllers\MotherboardController::class, 'store'])->name('store.motherboard')->middleware('is_admin');
Route::get('/motherboard/details/{id}', [App\Http\Controllers\MotherboardController::class, 'show'])->name('show.motherboard.details');
Route::get('/motherboard/edit/{id}', [App\Http\Controllers\MotherboardController::class, 'edit'])->name('edit.motherboard')->middleware('is_admin');
Route::put('admin/home/motherboard/{id}', [MotherboardController::class, 'update'])->name('motherboard.update')->middleware('is_admin');
Route::put('/admin/home/motherboard/update', [App\Http\Controllers\MotherboardController::class, 'update'])->name('update.motherboard')->middleware('is_admin');
Route::delete('/admin/home/motherboard/delete/{id}', [App\Http\Controllers\MotherboardController::class, 'destroy'])->name('delete.motherboard')->middleware('is_admin');

//power_supply
Route::get('/admin/home/power_supply', [App\Http\Controllers\PowerSupplyController::class, 'index'])->name('index.power_supply')->middleware('is_admin');
Route::get('/admin/home/power_supply/create', [App\Http\Controllers\PowerSupplyController::class, 'create'])->name('create.power_supply')->middleware('is_admin');
Route::post('/admin/home/power_supply/store', [App\Http\Controllers\PowerSupplyController::class, 'store'])->name('store.power_supply')->middleware('is_admin');
Route::get('/power_supply/details/{id}', [App\Http\Controllers\PowerSupplyController::class, 'show'])->name('show.power_supply.details');
Route::get('/power_supply/edit/{id}', [App\Http\Controllers\PowerSupplyController::class, 'edit'])->name('edit.power_supply')->middleware('is_admin');
Route::put('admin/home/power_supply/{id}', [PowerSupplyController::class, 'update'])->name('power_supply.update')->middleware('is_admin');
Route::put('/admin/home/power_supply/update', [App\Http\Controllers\PowerSupplyController::class, 'update'])->name('update.power_supply')->middleware('is_admin');
Route::delete('/admin/home/power_supply/delete/{id}', [App\Http\Controllers\PowerSupplyController::class, 'destroy'])->name('delete.power_supply')->middleware('is_admin');

//ram
Route::get('/admin/home/ram', [App\Http\Controllers\RamController::class, 'index'])->name('index.ram')->middleware('is_admin');
Route::get('/admin/home/ram/create', [App\Http\Controllers\RamController::class, 'create'])->name('create.ram')->middleware('is_admin');
Route::post('/admin/home/ram/store', [App\Http\Controllers\RamController::class, 'store'])->name('store.ram')->middleware('is_admin');
Route::get('/ram/details/{id}', [App\Http\Controllers\RamController::class, 'show'])->name('show.ram.details');
Route::get('/ram/edit/{id}', [App\Http\Controllers\RamController::class, 'edit'])->name('edit.ram')->middleware('is_admin');
Route::put('admin/home/ram/{id}', [RamController::class, 'update'])->name('ram.update')->middleware('is_admin');
Route::put('/admin/home/ram/update', [App\Http\Controllers\RamController::class, 'update'])->name('update.ram')->middleware('is_admin');
Route::delete('/admin/home/ram/delete/{id}', [App\Http\Controllers\RamController::class, 'destroy'])->name('delete.ram')->middleware('is_admin');

//storage
Route::get('/admin/home/storage', [App\Http\Controllers\StorageController::class, 'index'])->name('index.storage')->middleware('is_admin');
Route::get('/admin/home/storage/create', [App\Http\Controllers\StorageController::class, 'create'])->name('create.storage')->middleware('is_admin');
Route::post('/admin/home/storage/store', [App\Http\Controllers\StorageController::class, 'store'])->name('store.storage')->middleware('is_admin');
Route::get('/storage/details/{id}', [App\Http\Controllers\StorageController::class, 'show'])->name('show.storage.details');
Route::get('/storage/edit/{id}', [App\Http\Controllers\StorageController::class, 'edit'])->name('edit.storage')->middleware('is_admin');
Route::put('admin/home/storage/{id}', [StorageController::class, 'update'])->name('storage.update')->middleware('is_admin');
Route::put('/admin/home/storage/update', [App\Http\Controllers\StorageController::class, 'update'])->name('update.storage')->middleware('is_admin');
Route::delete('/admin/home/storage/delete/{id}', [App\Http\Controllers\StorageController::class, 'destroy'])->name('delete.storage')->middleware('is_admin');

//tower
Route::get('/admin/home/tower', [App\Http\Controllers\TowerController::class, 'index'])->name('index.tower')->middleware('is_admin');
Route::get('/admin/home/tower/create', [App\Http\Controllers\TowerController::class, 'create'])->name('create.tower')->middleware('is_admin');
Route::post('/admin/home/tower/store', [App\Http\Controllers\TowerController::class, 'store'])->name('store.tower')->middleware('is_admin');
Route::get('/tower/details/{id}', [App\Http\Controllers\TowerController::class, 'show'])->name('show.tower.details');
Route::get('/tower/edit/{id}', [App\Http\Controllers\TowerController::class, 'edit'])->name('edit.tower')->middleware('is_admin');
Route::put('admin/home/tower/{id}', [TowerController::class, 'update'])->name('tower.update')->middleware('is_admin');
Route::put('/admin/home/tower/update', [App\Http\Controllers\TowerController::class, 'update'])->name('update.tower')->middleware('is_admin');
Route::delete('/admin/home/tower/delete/{id}', [App\Http\Controllers\TowerController::class, 'destroy'])->name('delete.tower')->middleware('is_admin');


Route::resource('/pc_part', PcPartController::class);

Route::get('/pc_part/index', [PcPartController::class, 'index' ])->name('index.pcpart');
Route::post('/pc_part/create', [PcPartController::class, 'store']);

//pcpart-admin
Route::get('/admin/view', [PcPartController::class, 'adminView'])->name('admin.view')->middleware('is_admin');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
