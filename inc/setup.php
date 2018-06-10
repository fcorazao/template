<?php

ob_start();

date_default_timezone_set('Europe/Madrid');

setlocale(LC_TIME, array('es_ES.UTF-8','esp'));

/**
 * ----------------------
 *   Define Environment
 * ----------------------
 * 
 * Define the working environment
 * 
 * Options:
 * - debug (Warma's local server for inhouse development with error reporting enabled)
 * - development (Warma's local server for inhouse development)
 * - beta (Warma's server for online revision with error reporting enabled)
 * - test (Warma's server for online revision)
 * - launch (Client's server when the site will be hosted)
 * 
 */

define('environment', 'debug');
define('encryption_key', 's!a@k#u$r%a^&*');

// Admin

define('administrator_email', 'sakura@warma.pe');

// Sessions

define('system_session_name', 'template_sys');
define('user_session_name', 'template_user');

//========================================================================================================
// DO NOT MODIFY ANYTHING BELOW THIS LINE
//========================================================================================================

/**
 * -----------------------------------
 *   Configuración general de la web
 * -----------------------------------
 * 
 * En este archivo se determinan:
 * - Las variables de la base de datos
 * - Los datos de conexión a la base de datos
 * - La cantidad de noticias y promociones a mostrar en cada sección
 * 
 */

// Session start
session_start();

// Area, Section & Zone
$area = "index";
if(isset($_GET['area'])){
	$area = $_GET['area'];
}
if(isset($_GET['section'])){
	$section = $_GET['section'];
}
if(isset($_GET['zone'])){
	$zone = $_GET['zone'];
}
if(isset($_GET['data'])){
	$data = $_GET['data'];
}

/**
 * ----------------------------------
 *   Conection variables and tables
 * ----------------------------------
 * 
 * Define the server variables for each environment.
 * Define the database tables.
 * Get the information from the setup table in the database.
 * 
 */

switch(environment){
	case "debug":
	case "development":
		$DBhost = "localhost:3306";
		$DBuser = "root";
		$DBpass = "";
		$DBName = "template";
		$site_Mode = "development";
		$SakuraURL = 'http://localhost/template/sakura/';
		$TheSiteURL = 'http://localhost/template/';
	break;
	case "beta":
	case "test":
		$DBhost = "localhost";
		$DBuser = "thefman_minsal";
		$DBpass = "M1ns4l123!";
		$DBName = "thefman_minsal";
		$site_Mode = "test";
		$SakuraURL = 'http://clientes.warma.pe/minsal/sakura/';
		$TheSiteURL = 'http://clientes.warma.pe/minsal/';
	break;
	case "online":
		$DBhost = "localhost";
		$DBuser = "";
		$DBpass = "";
		$DBName = "";
		$site_Mode = "online";
		$SakuraURL = '';
		$TheSiteURL = '';
	break;
}

// Error Control

switch(environment){
	case "debug":
	case "beta":
		error_reporting(E_ALL ^ E_NOTICE);
	break;
	case "development":
	case "test":
	case "online":
		error_reporting(E_ERROR);
	break;
}

// Tables

$t_logs = 'logs';

// Connect

class dbConnection {
	function connect() {
		global $DBhost,$DBuser,$DBpass,$DBName;
		$dbConnect = mysqli_connect($DBhost,$DBuser,$DBpass,$DBName);
		if(mysqli_connect_errno()){
			printf("Error code 001: %s\n", mysqli_connect_error());
			exit();
		}else{
			$this->myconn = $dbConnect;
		}
		return $this->myconn;
	}
}

$connection = new dbConnection();
$link = $connection->connect();

// Languages
include("functions.php");

// Languages
//include("languages.php");

// Messages
//include("messages.php");

// Load classes
spl_autoload_register('myAutoloader');
function myAutoloader($className){
	$path = realpath(__DIR__ . '/..').'/classes/';
	include $path.$className.'.class.php';
}

/**
 * ---------------------------
 *   Static & Category Pages
 * ---------------------------
 *
 *
 */

$areaLoad = $area;
$realArea = $area;

// Static Pages

switch($area){
	case '':
		$realArea = $area;
		$areaLoad = 'static';
	break;
}

/**
 * ------------------
 *    Session check
 * ------------------
 * 
 * Check for a logged in user
 * If there is none, show the login page
 *
 */

if(!client_logged_in()){
	$areaLoad = "login";
}
if($area=="recover-password"){
	$areaLoad = "recover-password";
}

/**
 * ---------------
 *   Current URL
 * ---------------
 *
 *
 */

/* Full URL */
$thisURL = $_SERVER['REQUEST_URI'];

/* URL - No parameters */
$thisU = explode("?", $_SERVER['REQUEST_URI']);
$thisURLClear = $thisU[0];

/* URL - Only parameters*/
$thisURLParametersReady = '?'.$thisU[1];
$thisURLParameters = explode("&", $_SERVER['REQUEST_URI']);
$thisU = explode("?", $thisURLParameters[0]);
$thisURLParameters[0] = $thisU[1];
