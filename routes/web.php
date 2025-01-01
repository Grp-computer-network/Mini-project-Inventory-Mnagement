<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/krithick/{id}', function($id){
    return "<h1>Hey Buddy Kn {$id} </h1>";
});

Route::get('/Krithick-1/{name}',function($name){
    if($name=="first"){
        return "<h1> First-page </h1>";
    }
    else if ($name== "second"){
        return "<h1> Seocnd-page </h1>"; 
    }
    else{
        return "INvaild";
    }
});

Route::get('/users/{id}/{name}',function($id,$name){
    return "<h1> User ID is :{$id} <br> User Name is :{$name}</h1>";
})->where("name","[A-Za-z]+")->where("id","[0-9]+");

Route::get('/category/{category}',function($category){
    return "<h1> I am {$category} </h1>"; 
})->whereIn('category',['Batman','Superman','Ironman']);

Route::get('/about',function(){
    return view('about');
});