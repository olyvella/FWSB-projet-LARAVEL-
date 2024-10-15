l<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController ;
use App\Http\Controllers\AtelierController ;
use App\Http\Controllers\ParticipationCOntroller ; 

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
    return view('welcome'); 
});

						//clients ROUTE 


Route::get('/', function () {
    return view('welcome');
});



Route::get('/clients/enregistrement', [ ClientController::class , 'enregistrement' ] ) ; 


Route::get('/clients/enregistrer', [ ClientController::class , 'enregistrer' ] ) ; 


Route::get('/clients/connexion', [ ClientController::class , 'connexion' ] ) ; 

Route::get('/clients/connecter', [ ClientController::class , 'connecter' ] ) ; 


Route::get('/clients/espace', [ ClientController::class , 'espace' ] ) ; 


Route::get('/clients/profil', [ ClientController::class , 'profil' ] ) ; 


Route::get('/clients/deconnecter', [ ClientController::class , 'deconnecter' ] ) ; 



							//ateliers
						

Route::get('/ateliers/programmes', [ AtelierController::class , 'programmes' ] ) ; 


Route::get('/ateliers/passes', [ AtelierController::class , 'passes' ] ) ; 




							//participations



Route::get('/participations/{numAtelier}', [ ParticipationCOntroller::class , 'proceder' ] ) ->where('num' , '[0-9]+') ;


Route::get('/participations/{numAtelier}/annuler', [ ParticipationCOntroller::class , 'annuler' ] ) ->where('num' , '[0-9]+');


Route::get('/participations/{num}/commentaire/voir', [ ParticipationCOntroller::class , 'voir' ] ) ; 


Route::get('/participations/{num}/commenter', [ ParticipationCOntroller::class , 'commenter' ] ) ; 

