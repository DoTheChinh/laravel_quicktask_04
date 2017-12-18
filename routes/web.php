<?php

use App\Task;
use Illuminate\Http\Request;

// Route::get('/', function () {
// 	return view('tasks');
// });



Route::delete('/task/{task}', 'Viewcontroller@detroy');
 
 Route::resources([
        '/task' => 'ViewController',
    ]);

  Route::get('/','ViewController@index');

//   	Route::get('/{locale}', function ($locale) {
//     App::setLocale($locale);

//     //
// });
  
