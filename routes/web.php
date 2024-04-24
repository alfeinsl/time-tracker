<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page.login');
});

Route::get('/dashboard', function () {
    return view('page.dashboard');
});

Route::get('/ad-manage-account', function () {
    return view('page.admin.ad-manage-account');
});

Route::get('/admin-edit-account', function () {
    return view('page.admin.ad-edit-acc');
});

Route::get('/admin-create-account', function () {
    return view('page.admin.ad-create-acc');
});

Route::get('/dev-modify-info', function () {
    return view('page.developer.dev-modify-info');
});

Route::get('/dev-update-tasks', function () {
    return view('page.developer.dev-update-tasks');
});

Route::get('/dev-tasks', function () {
    return view('page.developer.dev-tasks');
});

Route::get('/client-feedback', function () {
    return view('page.client.client-feedback');
});

Route::get('/client-request-project', function () {
    return view('page.client.client-req-project');
});
Route::get('/client-view-project', function () {
    return view('page.client.client-view-project');
});

Route::get('/manager-project', function () {
    return view('page.client.manager-project');
});

Route::get('/manager-client', function () {
    return view('page.client.manager-client');
});

Route::get('/manager-tasks', function () {
    return view('page.client.manager-tasks');
});

Route::get('/dev-chat', function () {
    return view('page.developer.dev-chat');
});