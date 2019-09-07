<?php

Route::get('/', function () {
    return view('index');
});

Route::get('/live', function () {
    return view('live');
});