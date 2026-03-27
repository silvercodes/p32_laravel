<?php

use App\Http\Controllers\BladeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/posts', [PostController::class, 'index'])
//    ->name('posts.index');
//
//Route::get('/posts/{post}', [PostController::class, 'show'])
//    ->name('posts.show');
//
//Route::post('/orders', [OrderController::class, 'process'])
//    ->name('orders.process');
//
//Route::get('/adults', function() {
//    return response()->json([
//        'success' => true,
//        'message' => 'Welcome!!!'
//    ]);
//})->middleware('age:18')
//->name('adults.index');



// ====== path parameters
//Route::get('/users/{id}', function ($id) {
//    return "User $id";
//});
//
//Route::get('/users/{name?}', function ($name = 'Guest') {
//    return "Hello $name";
//});
//
//Route::get('/users/{id}', function ($id) {
//    return "User $id";
//})->where('id', '[0-9]+');
//

// Route::get('/posts/{post}/comments/{comment}', function($post, $comment) {});

//Route::get('/posts/{post}', function(Post $post) {
//});

//Route::get('/posts/{post:title}', function(Post $post) {
//});

//Route::get('/posts/{post?}', function(Post|null $post) {
//});

// Route::any('/posts'....);
// Route::redirect('/users', '/v2/users', 301);
// Route::view('/about', 'pages.about');




// ======= routes group
//Route::middleware(['auth', 'admin',])->group(function() {
//    Route::get('/users', ....);
//    Route::get('/posts', ....);
//});

//Route::prefix('api')->group(function() {
//    Route::get('/users', function() {});        // /api/users
//    Route::get('/posts', function() {});        // /api/posts
//});

//Route::name('admin.')->group(function() {
//    Route::get('/users', function() {})->name('users');        // 'admin.users'
//    Route::get('/posts', function() {})->name('posts');        // 'admin.posts'
//});

//Route::middleware(['auth', 'admin'])
//    ->prefix('admin')
//    ->name('admin.')
//    ->group(function() {
//        Route::get('/users', function () {})
//            ->name('users');                // /admin/users         admin.users
//    });

//Route::middleware(['throttle:api'])->group(function() {
//    Route::get('/users', ....);
//    Route::get('/posts', ....);
//});

//Route::middleware(['throttle:10,1'])->group(function() {
//    Route::get('/users', ....);
//    Route::get('/posts', ....);
//});




Route::view('/', 'pages.home')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::view('/contact', 'pages.contact')->name('contact');


Route::prefix('posts')
    ->name('posts.')
    ->group(function () {

        Route::get('/', [PostController::class, 'index'])
            ->middleware('throttle:std')
            ->name('index');

        Route::get('/{post}', [PostController::class, 'show'])
            ->name('show');

        Route::post('/', [PostController::class, 'store'])
            ->name('store');

    });


// ---------------
Route::prefix('views')
    ->name('views.')
    ->group(function () {
        Route::get('/directives', [BladeController::class, 'directives'])->name('directives');
        Route::get('/inheritance', [BladeController::class, 'inheritance'])->name('inheritance');
        Route::get('/deepinh', [BladeController::class, 'deepInheritance'])->name('deepInheritance');
        Route::get('/stack', [BladeController::class, 'stack'])->name('stack');
        Route::get('/components', [BladeController::class, 'components'])->name('components');
        Route::get('/slot', [BladeController::class, 'slot'])->name('slot');
    });
// -----------



