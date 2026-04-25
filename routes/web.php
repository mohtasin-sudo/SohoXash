<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('welcome'));
Route::get('/login', fn() => view('auth.login'))->name('login');
Route::get('/register', fn() => view('auth.register'))->name('register');
Route::get('/forgot-password', fn() => view('auth.forgot-password'))->name('password.request');
Route::get('/dashboard', fn() => view('dashboard'))->name('dashboard');
Route::get('/partner', fn() => view('partner'))->name('partner');
