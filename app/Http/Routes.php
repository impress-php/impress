<?php
use Impress\Framework\Http\Route;

Route::post("/", function () {
    echo "xxxxxxxx";
});
Route::get("/", "HelloWorld@index");

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
        Route::post("/a", function () {
            echo "xxxxxxxx";
        }, ["xxxx"]);
        Route::get("/b", function () {
            echo "xxxxxxxx";
        });
    });
    Route::get("/c", function () {
        echo "xxxxxxxx";
    }, ["ccc"]);
});


