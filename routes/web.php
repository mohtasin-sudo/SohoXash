<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('welcome'));
Route::get('/login', fn() => view('auth.login'))->name('login');
Route::get('/register', fn() => view('auth.register'))->name('register');
Route::get('/forgot-password', fn() => view('auth.forgot-password'))->name('password.request');
Route::get('/dashboard', fn() => view('dashboard'))->name('dashboard');
Route::get('/partner', fn() => view('partner'))->name('partner');
Route::get('/profile', fn() => view('profile'))->name('profile');
Route::get('/support-ticket', fn() => view('support-ticket'))->name('support.ticket');
Route::get('/support-ticket/{ticketId}', function (string $ticketId) {
    return view('support-ticket-show', ['ticketId' => $ticketId]);
})->name('support.ticket.show');
Route::get('/gift-card', fn() => view('gift-card'))->name('gift.card');
Route::get('/news-feed', fn() => view('news-feed'))->name('news.feed');
