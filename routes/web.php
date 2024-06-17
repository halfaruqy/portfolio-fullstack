<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InquiryController;

Route::get('/', function () {
    return view('pages.portfolio');
});
Route::post('/send-inquiry', [InquiryController::class, 'sendInquiry']);
