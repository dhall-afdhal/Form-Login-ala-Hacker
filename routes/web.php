<?php

use Illuminate\Support\Facades\Route;

Route::get('/demo-hacker', function () {
    return view('hacker');
});
