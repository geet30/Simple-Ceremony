<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
});
Route::get('location', function () {
    return view('pages.location');
});
Route::get('single-location', function () {
    return view('pages.single-location');
});
Route::get('request-custom-location', function () {
    return view('pages.request-custom-location');
});
Route::get('book-custom-location', function () {
    return view('pages.book-custom-location');
});
Route::get('book-your-location', function () {
    return view('pages.book-your-location');
});
Route::get('voucher', function () {
    return view('pages.voucher');
});
Route::get('voucher-details', function () {
    return view('pages.voucher-details');
});
Route::get('contact-us', function () {
    return view('pages.contact-us');
});
Route::get('how-it-works', function () {
    return view('pages.how-it-works');
});
Route::get('team', function () {
    return view('pages.team');
});
Route::get('team-detail', function () {
    return view('pages.team-detail');
});
Route::get('faq', function () {
    return view('pages.faq');
});
Route::get('married-checklist', function () {
    return view('pages.married-checklist');
});
Route::get('add-ons', function () {
    return view('pages.add-ons');
});
Route::get('why-sc', function () {
    return view('pages.why-sc');
});
Route::get('your-ceremony', function () {
    return view('pages.your-ceremony');
});
Route::get('sample-ceremony', function () {
    return view('pages.sample-ceremony');
});
Route::get('marriage-certificate', function () {
    return view('pages.marriage-certificate');
});
Route::get('complete-paperwork', function () {
    return view('pages.complete-paperwork');
});
Route::get('add-ons-detail', function () {
    return view('pages.add-ons-detail');
});
Route::get('add-ons-gallery', function () {
    return view('pages.add-ons-gallery');
});
Route::get('term-and-condition', function () {
    return view('pages.term-and-condition');
});
Route::get('authorised-person', function () {
    return view('pages.authorised-person');
});
Route::get('current-restrictions', function () {
    return view('pages.current-restrictions');
});
Route::get('shortening-of-time', function () {
    return view('pages.shortening-of-time');
});
Route::get('reschedule-correction', function () {
    return view('pages.reschedule-correction');
});
Route::get('advice-after-first-year', function () {
    return view('pages.advice-after-first-year');
});
