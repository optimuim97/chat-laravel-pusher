<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConversationsController;

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
    return view('auth.login');
});

// Route::get('/dashboard', function () {
//     $users = User::select('name', 'id')->where('id', '!=', Auth::user()->id)->get();
//     $unread = $this->r->unreadCount($this->auth->user()->id);
//     return view('pages.message', compact('users','unread'));
// })->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', [ConversationsController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::get('/conversations/{user}', [ConversationsController::class, 'show'])
        ->middleware('can:talkTo,user')
        ->name('conversations.show');

Route::get('/users/profile', [ConversationsController::class, 'edit'])->name('user.edit-profile');
Route::put('/users/profile', [ConversationsController::class, 'update'])->name('users.update-profile');
Route::post('/conversations/{user}', [ConversationsController::class, 'store'])->middleware('can:talkTo,user');
require __DIR__.'/auth.php';
