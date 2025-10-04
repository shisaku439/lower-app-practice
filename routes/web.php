<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;


Route::get('/', function () {
    return view('welcome');
});


Volt::route('/lower/{word}', 'lower');

Volt::route('/fizz_buzz', 'fizz_buzz');
