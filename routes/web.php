<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;

Route::get('/', function () {
//    return view('welcome');



//    Schema::connection('sqlite2')->create('users', function(Blueprint $table) {
//        $table->id();
//        $table->string('name');
//        $table->string('username', '100');
//        $table->timestamps();
//    });

//    try {
//
//        Schema::connection('sqlite2')->table('users', function(Blueprint $table) {
//            $table->string('email')->unique();
//        });
//
//    } catch (Exception $e) {
//        echo $e->getMessage();
//    }

    try {

    Schema::connection('sqlite2')->rename('users', 'custom_users');

    return "Renamed";

    } catch (Exception $e) {
        echo $e->getMessage();
    }


});
