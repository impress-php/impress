<?php
use Impress\Framework\Http\Route;

//Route::post("/", function () {
//    echo "xxxxxxxx";
//});
Route::get("/", "HelloWorld@index");
Route::get("/c", "HelloWorld@config", [], '', 'cc');
Route::get("/s", function () {
    echo "xxxxx";
});

Route::group([
    "prefix" => "/s",
    "middleware" => [
        "a", "b", "c"
    ]
], function () {
    Route::group([
        "prefix" => "/f",
        "middleware" => [
            "d", "e", "f"
        ]
    ], function () {
        Route::post("/a", "HelloWorld@index", ["xxxx"]);
        Route::get("/b", "HelloWorld@index");
    });
    Route::get("/c", "HelloWorld@index", ["ccc"]);
});


