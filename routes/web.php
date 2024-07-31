<?php

use Illuminate\Support\Facades\Route;

Route::get("/",function(){
    return view("index");
});
Route::get("/get-a-quote",function(){
    return view("get-a-quote");
});
