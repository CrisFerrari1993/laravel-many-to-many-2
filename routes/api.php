<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\ProjectController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('/v1') -> group(function() {

    /* Route::get('/test-api', [ProjectController :: class, 'testApi'])
    -> name('test.api'); */

    Route::get('/projects-index', [ProjectController :: class, 'projectsIndex']);

    Route::get('/project/{id}', [ProjectController :: class, 'projectShow']);
});

