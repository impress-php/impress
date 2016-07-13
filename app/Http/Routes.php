<?php
use Impress\Framework\Http\Route\Route;

//Route::get("/", "HelloWorld@index");
//Route::get("/login", "HelloWorld@login");
//Route::get("/c", "HelloWorld@config", [], '', 'cc');
//
Route::controller("HelloWorld", ['as' => 'HelloWorld']);

//
//Route::group([
//    "prefix" => "/s////",
//    "middleware" => [
//        "a", "b", "c", "d"
//    ]
//], function () {
//    Route::group([
//        "prefix" => "/f/",
//        "middleware" => [
//            "d", "e", "f"
//        ]
//    ], function () {
//        Route::controller("HelloWorld");
//    });
//    Route::get("/c", "HelloWorld@index", ["ccc"]);
//});


