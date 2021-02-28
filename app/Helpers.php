<?php

use Illuminate\Support\Facades\Route;

if ( ! function_exists('isActive')) {
    function isActive($routeName, $className = 'active') {
        return mb_strpos(
            Route::currentRouteName(),
            $routeName) === false ? '' : $className;
    }
}
