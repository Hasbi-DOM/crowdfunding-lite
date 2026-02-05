<?php

use App\Http\Controllers\CampaignController;
use App\Http\Controllers\DonationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('campaigns.index');
});
// Route::get('/campaigns/{id}', [CampaignController::class, 'show'])
//     ->name('campaigns.show');

Route::resource('campaigns', CampaignController::class);

Route::post('/campaigns/{campaign}/donations', [DonationController::class, 'store'])
    ->name('donations.store');