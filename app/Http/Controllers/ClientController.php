<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller {
	
	public function enregistrement() {
		return view('enregistrement.infos') ;
	}
	
	public function enregistrer() {
		return "Enregistrer le client " ;
	}
	
	public function connexion() {
		return " COnnexion client " ;
	}
	
	public function connecter() {
		return " COnnexion client " ;
	}
	
	public function espace() {
		return "Bienvenue dans l'espace Client" ;
	}
	
	public function profil() {
		return " Profil du client " ;
	}
	
	public function deconnecter() {
		return " Deconnecter le client " ;
	}
	
}
	
