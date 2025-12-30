<?php
//
use Illuminate\Support\Facades\Route;
//
Route::view('/', 'welcome');
//
//Route::view('dashboard', 'dashboard')
//    ->middleware(['auth', 'verified'])
//    ->name('dashboard');
//
//Route::view('profile', 'profile')
//    ->middleware(['auth'])
//    ->name('profile');
//
//require __DIR__.'/auth.php';
//
//
//
//

Route::prefix('admin/')->middleware('guest')->group(function () {

    Route::view('login','admin.auth.login')->name('admin.login');

});


Route::prefix('admin')->name('admin.')->middleware('admin')->group(function () {
    Route::view('index','admin.index')->name('index');
    Route::view('users','admin.user.index')->name('user.index');
    Route::get('create/user', \App\Livewire\Admin\User\UserCreate::class)->name('users.create');

    Route::get('users/{user}/edit', \App\Livewire\Admin\User\UserEdit::class)->name('users.edit');

    Route::view('posts','admin.post.index')->name('post.index');
    Route::view('roles','admin.roles.index')->name('roles.index');


});
