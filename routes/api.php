<?php

use Illuminate\Support\Facades\Route;

Route::get('/{resource}/text-items/{field}', 'Gkermer\TextAutoComplete\Http\Controllers\TextItemsController@index');