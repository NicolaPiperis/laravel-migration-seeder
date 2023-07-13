<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\mainController;

Route ::get('/', [mainController :: class, 'index']) -> name('home');
