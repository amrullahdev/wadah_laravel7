<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::apiResources(['daftar' => 'API\autentikasiController'], [
    'only' => ['store']
]);

Route::middleware('auth:api')->group(function () {
    // Route::apiResources(['index-user' => 'API\userController'],[
    // 	'except'=>['edit','show','create']
    // ]);
});
