<?php
use Illuminate\Http\Request;

Route::post('api/edna', function(Request $request) {
    $callback = new \Edna\Controllers\EdnaCallbackController();
    return $callback->callback($request);
});
