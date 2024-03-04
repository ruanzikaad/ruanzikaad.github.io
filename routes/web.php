<?php

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


// https://m.pg-nmga.com
//126/
//index.html
//?op=pt
//&btt=1
//&ops=.mP3b5zoHwETJ4LZMm7ZUWl3-7UTjdfUiCm2lMqzLTrVetxg9UTIykAblK5JrX8s6VtwG59kz6REVXZE4-vMKishpd3tBf.aHsCXOwHKjGG-GnmAbgFOao5FwsP93A4E
//&ot=F020CEEE-4277-408E-AAFA-619BFFF9AEBF
//&f=https://pgtada-fortune-tiger.com
//&l=pt
//&__refer=m.pgr-nmga.com
//&or=static.pg-nmga.com
//&__hv=1f819bc7

Route::get('/{path}', [CopyController::class, 'copy'])->where('path', '.*');
