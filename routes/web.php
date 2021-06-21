<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {

  $data = 
      [
        'title' => 'hello word',
      ];
      return view('home', $data);
  
    
    

});

  
   
Route::get('/utente', function () {

      $data =
      [
        
        'utenti' => [   
          [
            'name' => 'alessandro',
            'surname' => 'ciancio',
            'email' => 'alessandro.ciancio@libero.it',
            'work' => 'student',
          ],
          [
            'name' => 'ugo',
            'surname' => 'bianchi',
            'email' => 'bianchilibero.it',
            'work' => 'student',
          ],
          [
            'name' => 'maria',
            'surname' => 'verdi',
            'email' => 'verdi@gmail.com',
            'work' => 'student',
          ],
        ] 
        ];
      

 
      return view('utente', $data);

  
});

Route::get('/film', function () {

  $data =
    [
      'title' => 'film',

      'film' =>[
        'film1' => [
          'title' => 'SPIRAL - L\'EREDITÀ DI SAW',
          'direct' => 'Darren Lynn Bousman',
          'year' => '2021',
        ],
        'film2' => [

          'title' => 'FAST & FURIOUS 9',
          'direct' => 'Darren Lynn Bousman',
          'year' => '2021',
        ],




      ],

    ];
  return view('film', $data);
});

   

  
  