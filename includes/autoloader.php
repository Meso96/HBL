<?php
/*
 * 
 *	Alle classes, models en includes worden verzameld in dit bestand om te includen
 *  Door: DevAlly
 *  Datum: 06/12/2016
 *  Contactpersoon: Ramon Kerpershoek
 *  
 */
//ini_set('display_startup_errors', 1);
//ini_set('display_errors', 1);
//error_reporting(-1);
define('URL_ROOT', '');

include('str.php'); 			//Controlleert de tekens
include('connection.php'); 		//Verbinding met de database
include('input.php'); 			//Haalt error lege input weg


//Leest door mappen naar controllers en models
spl_autoload_register(function ($class) {
    if(file_exists(__DIR__ . '/model/'. $class . '.php'))	{
    	include 'model/'. $class . '.php';
	} else if(file_exists(__DIR__ . '/control/'. $class . '.php')) {
		include 'control/'. $class . '.php';
	}
});

include('post.php');		// Alle posts worden hier opgehaald


//De Foutmeldingen
if(!isset($_SESSION['message'])) {
	$_SESSION['message'] = "";
}


if(!isset($_SESSION['alert'])) {
	$_SESSION['alert'] = "";
}