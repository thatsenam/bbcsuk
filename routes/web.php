<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MembersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
php artisan create:resources Member  --with-migration

| php artisan resource-file:create Member --fields=id,applicant_name,age,address,mobile_number,email,spouse_name,spouse_age,spouse_email,children_1_name,children_1_age,children_1_mobile,children_1_email,children_2_name,children_2_age,children_2_mobile,children_2_email,reference_name

*/

Route::get('/', function () {
    return view('welcome');
})->name('app.index');

Auth::routes();

Route::get('/donate-now', [App\Http\Controllers\HomeController::class, 'donate_now'])->name('app.donate_now');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('app.contact');
Route::get('/gallery', [App\Http\Controllers\HomeController::class, 'gallery'])->name('app.gallery');
Route::get('/project', [App\Http\Controllers\HomeController::class, 'project'])->name('app.project');
Route::get('/membership', [App\Http\Controllers\HomeController::class, 'membership'])->name('app.membership');
Route::post('/contact', [App\Http\Controllers\HomeController::class, 'contact_store'])->name('app.contact.store');
Route::post('/donate-now', [App\Http\Controllers\HomeController::class, 'donate_now_store'])->name('app.donate_now.store');

Route::get('/admin', function () {
    return redirect()->route('members.member.index');
});

Route::group(['prefix' => 'admin/members'], function () {
    Route::get('/', [MembersController::class, 'index'])->name('members.member.index');
    Route::get('/create', [MembersController::class, 'create'])->name('members.member.create');
    Route::get('/show/{member}', [MembersController::class, 'show'])->name('members.member.show')->where('id', '[0-9]+');
    Route::get('/{member}/edit', [MembersController::class, 'edit'])->name('members.member.edit')->where('id', '[0-9]+');
    Route::post('/', [MembersController::class, 'store'])->name('members.member.store');
    Route::put('member/{member}', [MembersController::class, 'update'])->name('members.member.update')->where('id', '[0-9]+');
    Route::delete('/member/{member}', [MembersController::class, 'index'])->name('members.member.destroy')->where('id', '[0-9]+');

});
