<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\AyatController;
use App\Http\Controllers\Dashboard\ConversationController;
use App\Http\Controllers\Dashboard\FatawaController;
use App\Http\Controllers\Dashboard\ParagraphController;
use App\Http\Controllers\Dashboard\TheQuranicTextController;
use App\Http\Controllers\Dashboard\QuranRecitationController;
use App\Http\Controllers\Dashboard\QuranAudioInterpretationController;
use App\Http\Controllers\Dashboard\QuranVisualInterpretationController;
use App\Http\Controllers\Dashboard\QuranReadInterpretationController;
use App\Http\Controllers\Dashboard\QuranTextInterpretationController;

















use Illuminate\Support\Facades\Route;




/*
|--------------------------------------------------------------------------
| Backend Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/Dashboard_Admin', [DashboardController::class, 'index']);


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){






    //################################ dashboard admin ########################################
    Route::get('/dashboard/admin', function () {
        return view('Dashboard.Admin.dashboard');
    })->middleware(['auth:admin'])->name('dashboard.admin');

    //################################ end dashboard admin #####################################

//---------------------------------------------------------------------------------------------------------------


    Route::middleware(['auth:admin'])->group(function () {

        //############################# puplish route ##########################################

        Route::resource('ayat', AyatController::class);
        Route::resource('conversation', ConversationController::class);
        Route::resource('fatawa', FatawaController::class);
        Route::resource('paragraph', ParagraphController::class);




        //############################# end puplish route ######################################

        //############################# quran route ##########################################
        Route::resource('theQuranicText', TheQuranicTextController::class);
        Route::resource('quran_recitation', QuranRecitationController::class);
        Route::resource('quran_audio_interpretation', QuranAudioInterpretationController::class);
        Route::resource('quran_visual_interpretation', QuranVisualInterpretationController::class);
        Route::resource('quran_read_interpretation', QuranReadInterpretationController::class);
        Route::resource('quran_text_interpretation', QuranTextInterpretationController::class);




        

        //############################# end quran route ######################################




    });


    require __DIR__.'/auth.php';


});





