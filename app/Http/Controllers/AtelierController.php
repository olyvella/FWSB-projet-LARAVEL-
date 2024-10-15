<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AtelierController extends Controller {
	
    public function programmes($num) {
		return " Programmer l'atelier ... $num " ;
	}
	
	public function passe($num) {
		return " Ateliers passer ... $num " ;
	}

}
