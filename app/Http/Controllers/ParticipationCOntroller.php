<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParticipationCOntroller extends Controller {
    
    public function proceder($numAtelier) {
		return " Proceder $numAtelier ";
	}
	
	public function anuler($numAtelier) {
		return " Proceder $numAtelier "; 
	}
	
	public function voir($numAtelier) {
		return " Participer à l'atelier $numAtelier "; 
	}
	
	public function commenter($numAtelier) {
		"Voici le commentaire numéro $numAtelier "; 	
	}
}
