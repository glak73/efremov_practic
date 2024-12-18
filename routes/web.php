<?php

use App\Http\Controllers\BucketController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); //пусть это будет вид когда человек только зашел, выыведет доступные товары
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resources([
        'products' => ProductController::class,
    ]);

    Route::controller(BucketController::class)->group(function () {
        Route::get('/bucket', 'index')->name('bucket.index');
        Route::post('/bucket/{Userid}/{Postid}', 'add')->name('bucket.add');
        Route::delete('/bucket/{Userid}/{Postid}', 'remove')->name('bucket.remove');
        /* Route::post('/orders'); */
    });
});

Route::fallback(function(){
return  abort(404, 'дорогой дневник, мне не подобрать слов чтобы описать боль и унижение которые я испытал сегодня, моя жизнь поломана навсегда... я не нашел в шкафу нарнию.. но зато нашел сраницу 404..');
});
require __DIR__.'/auth.php';
