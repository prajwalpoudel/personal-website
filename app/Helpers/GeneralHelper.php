<?php

use Illuminate\Support\Facades\Route;

/**
 * @return string|null
 */
function getCurrentRouteName() {
    return Route::currentRouteName();
}

/**
 * @param null $route
 * @return string
 */
function getActiveFrontMenuClass($route = null) {
    if($route && $route == getCurrentRouteName()) {
        return 'border-secondary';
    }
    else {
        return 'border-white';
    }
}
