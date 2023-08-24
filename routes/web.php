<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Modules\Setting\Entities\Setting;

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

Route::get('aaa', function (){
    $token = 'bot199282:d96b9631-3b1c-4905-9abe-a0c96b0a28ff';
    $chat_id = 9379369;
    $caption = 'text of caption file';
    $title = 'send file by api';

// initialise the curl request
    $request = curl_init("https://eitaayar.ir/api/$token/sendMessage");

// send a file
    curl_setopt($request, CURLOPT_POST, true);
    curl_setopt($request, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($request, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt(
        $request, CURLOPT_POSTFIELDS,
        array(
//            'file' => new \CurlFile(realpath('C:/Users/eitaa/Desktop/eitaa.apk')),
            'chat_id' => $chat_id,
            'title' => $title,
            'text' => $caption,
            'date' => time()+30, // send next 30 second
        ));

// output the response
    curl_setopt($request, CURLOPT_RETURNTRANSFER, true);
    echo curl_exec($request);

// close the session
    curl_close($request);
});

Route::middleware(['web', 'setlocale'])
    ->prefix('{locale}')
    ->where(['locale' => '[a-zA-Z]{2}'])
    ->group(function () {
        Route::get('/ddddd', function () {
            $lang = app()->getLocale();
            return view('test', compact('lang'));
        });
    });

Route::get('/', function () {
    $lang = session()->get('current_lang');
    if ($lang) {
        app()->setLocale($lang);
    } else {
        if ($lang_setting = Setting::where('key', 'default_system_lang')->first()) {
            app()->setLocale($lang_setting->value);
        }
    }

    return redirect(app()->getLocale());
});


Route::middleware(['setlocale'])
    ->prefix('{locale}')
    ->where(['locale' => '[a-zA-Z]{2}'])
    ->group(function () {

        Route::get('/dashboard', function () {
            return view('dashboard');
        })->middleware(['auth', 'verified'])->name('dashboard');

        Route::middleware('auth')->group(function () {
            Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
            Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
            Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        });

        require __DIR__ . '/auth.php';

    });


