<?php
use Impress\Framework\Http\Route;

Route::post("/", function () {
    echo "xxxxxxxx";
});
Route::get("/", "HelloWorld@index");

Route::group([
    "prefix" => "/s"
], function () {
    Route::post("/", function () {
        echo "xxxxxxxx";
    });
    Route::get("/", function () {
        echo "xxxxxxxx";
    });
});



