<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\CastController;
use App\Http\Controllers\Backend\CommentController;
use App\Http\Controllers\Backend\GenreController;
use App\Http\Controllers\Backend\MovieController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\ProducerController;
use App\Http\Controllers\Backend\WritterController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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
//     return view('welcome');
// });

Route::get('/', [UserController::class, 'Index']);

// Blog Details Route
Route::get('/blog/details/{slug}', [BlogController::class, 'BlogDetails']);

// Store Comment
Route::post('/store/comment', [BlogController::class,'StoreComment'])->name('store.comment');

// Reply comment
Route::post('/add_reply', [BlogController::class,'AddReply']);

// Search Post
// Route::post('/search/post', [BlogController::class, 'SearchPost'])->name('search.post');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Admin Route
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('/admin/dashboard', 'AdminDashboard')->name('admin.dashboard');
        Route::get('/admin/logout', 'AdminLogout')->name('admin.logout');
        Route::get('/admin/profile', 'AdminProfile')->name('admin.profile');
        Route::get('/admin/change/password', 'AdminChangePassword')->name('admin.change.password');
        Route::post('/admin/change/password', 'AdminUpdatePassword')->name('admin.password.update');
    });
    // Admin Movie Route
    Route::controller(MovieController::class)->group(function () {
        Route::get('/add/movie', 'AddMovie')->name('add.movie');
        Route::post('/store/movie', 'StoreMovie')->name('store.movie');
        Route::get('/all/movie', 'AllMovie')->name('all.movie');
        Route::get('/change/published/status/{id}', 'ChangePublishStatus')->name('change.published.status');
        Route::get('/change/status/{id}', 'ChangeStatus')->name('change.status');
        Route::get('/edit/movie/{id}', 'EditMovie')->name('edit.movie');
        Route::post('/update/movie', 'UpdateMovie')->name('update.movie');
        Route::get('/delete/movie/{id}', 'DeleteMovie')->name('delete.movie');
    });
    // Admin Producer Route
    Route::controller(ProducerController::class)->group(function () {
        Route::get('/add/producer', 'AddProducer')->name('add.producer');
        Route::post('/store/producer', 'StoreProducer')->name('store.producer');
        Route::get('/all/producer', 'AllProducer')->name('all.producer');
        Route::get('/edit/producer/{id}', 'EditProducer')->name('edit.producer');
        Route::post('/update/producer', 'UpdateProducer')->name('update.producer');
        Route::get('/delete/producer/{id}', 'DeleteProducer')->name('delete.producer');
    });
    // Admin Cast Route
    Route::controller(CastController::class)->group(function () {
        Route::get('/add/cast', 'AddCast')->name('add.cast');
        Route::post('/store/cast', 'StoreCast')->name('store.cast');
        Route::get('/all/cast', 'AllCast')->name('all.cast');
        Route::get('/edit/cast/{id}', 'EditCast')->name('edit.cast');
        Route::post('/update/cast', 'UpdateCast')->name('update.cast');
        Route::get('/delete/cast/{id}', 'DeleteCast')->name('delete.cast');
    });
    // Admin Writer Route
    Route::controller(WritterController::class)->group(function () {
        Route::get('/add/writer', 'AddWriter')->name('add.writer');
        Route::post('/store/writer', 'StoreWriter')->name('store.writer');
        Route::get('/all/writer', 'AllWriter')->name('all.writer');
        Route::get('/edit/writer/{id}', 'EditWriter')->name('edit.writer');
        Route::post('/update/writer', 'UpdateWriter')->name('update.writer');
        Route::get('/delete/writer/{id}', 'DeleteWriter')->name('delete.writer');
    });
    // Admin Genre Route
    Route::controller(GenreController::class)->group(function () {
        Route::get('/add/genre', 'AddGenre')->name('add.genre');
        Route::post('/store/genre', 'StoreGenre')->name('store.genre');
        Route::get('/all/genre', 'AllGenre')->name('all.genre');
        Route::get('/edit/genre/{id}', 'EditGenre')->name('edit.genre');
        Route::post('/update/genre', 'UpdateGenre')->name('update.genre');
        Route::get('/delete/genre/{id}', 'DeleteGenre')->name('delete.genre');
    });
    // Admin Post Route
    Route::controller(PostController::class)->group(function () {
        Route::get('/add/post', 'AddPost')->name('add.post');
        Route::post('/store/post', 'StorePost')->name('store.post');
        Route::get('/all/post', 'AllPost')->name('all.post');
        Route::get('/change/published/status/{id}', 'ChangePublishStatus')->name('change.published.status');
        Route::get('/edit/post/{id}', 'EditPost')->name('edit.post');
        Route::post('/update/post', 'UpdatePost')->name('update.post');
        Route::get('/delete/post/{id}', 'DeletePost')->name('delete.post');
    });
    // Admin Comment Route
    Route::controller(CommentController::class)->group(function () {
        Route::get('all/comment','AllComment')->name('all.comment');
    });
    // Admin Comment Reply Route
    Route::get('/admin/comment/reply/{id}', [CommentController::class,'AdminCommentReply'])->name('admin.comment.reply');
    // Reply Route
    Route::post('/reply/message', [CommentController::class,'ReplyMessage'])->name('reply.message');
});