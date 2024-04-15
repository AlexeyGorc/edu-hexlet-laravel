<?php

use Illuminate\Support\Facades\Route;

$team = [
  ['name' => 'Hodor', 'position' => 'programmer'],
  ['name' => 'Joker', 'position' => 'CEO'],
  ['name' => 'Elvis', 'position' => 'CTO'],
];

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function() use ($team) {
    return view('about', ['team' => $team]);
});