<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GetData;
use Illuminate\Support\Facades\Route;

// Route::middleware('guest')->group(function () {});

Route::get('/', function () {
    return view('auth.login');
})->name('login');

Route::middleware(['auth'])->group(function () {
    Route::get('/index', function () {
        return view('index');
    })->name('index');

    Route::get('/client', function () {
        return view('Action.client');
    })->name('client');

    Route::get('/employee', [GetData::class, 'getDepartment'])->name('employee');

    // Route::get('/employee', function () { return view('Action.employee');})->name('employee');

    Route::get('/order', function () {
        return view('Action.order');
    })->name('order');

    Route::get('/register_1', function () {
        return view('Action.register_1');
    })->name('register_1');

    Route::get('/about', function () {
        return view('Action.about');
    })->name('about');
    Route::get('/orders_table', [GetData::class, 'getOrders'])->name('orders_table');

    Route::get('/clients_table', [GetData::class, 'getClients'])->name('clients_table');
    Route::get('/items_table', [GetData::class, 'getItems'])->name('items_table');

    Route::get('/pages-profile', function () {
        return view('pages-profile');
    })->name('pages-profile');
});/* end authentication */


// });

// // 🔹 صفحات تتطلب تسجيل الدخول (auth)
//     // Route::get('/index', function () {
//     //     return redirect()->route('index'); // إعادة توجيه المستخدم بعد تسجيل الدخول
//     // });

//     // Route::get('/dashboard', function () {
//     //     return view('dashboard');
//     // })->name('dashboard');

//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


// });

// 🔹 تحميل ملف التحقق (Breeze / Laravel Auth)
Route::middleware(['auth'])->group(function () {

    require __DIR__ . '/action.php';
});

require __DIR__ . '/auth.php';
