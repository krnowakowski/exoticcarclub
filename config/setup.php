<?php
session_start();
$_SESSION['lang'] = 'pl';

define('SITE_DIR', '');

# Constants and variables
require_once SITE_DIR.'config/vars_cons.php';

if (LIVE === TRUE) {
	error_reporting(0);
	$debug = 0;
} else {
	error_reporting(1);
	$debug = 1;
}

function my_error_handler($e_number, $e_message, $e_file, $e_line, $e_vars) {
	// Build the error message:
	$message = "An error occurred in script '$e_file' on line $e_line:\n$e_message\n";
	// Add the backtrace:
	$message .= "<br /><pre>" .print_r(debug_backtrace(), 1) . "</pre>\n";
	// Or just append $e_vars to the message:
	// $message .= "<pre>" . print_r ($e_vars, 1) . "</pre>\n";
	if (!LIVE) { // Show the error in the browser.
		echo '<div class="error">' . nl2br($message) . '</div>';
	} else { // Development (print the error).
		// Send the error in an email:
		error_log ($message, 1, 'krzysztof@safepet.eu', 'From:krzysztof@safepet.eu');
		// Only print an error message in the browser, if the error isn't a notice:
		if ($e_number != E_NOTICE) {
			echo '<div class="error">A system error occurred. We apologize for the inconvenience.</div>';
		}
	} // End of $live IF-ELSE.
	return true; // So that PHP doesn't try to handle the error, too.
} // End of my_error_handler() definition.

// Use my error handler:
set_error_handler ('my_error_handler');

# DB connection
//require_once D_CONFIG.'connection.php';

# Functions
require_once D_FUNCTIONS.F_URL_PARSE;
require_once D_FUNCTIONS.F_FUNCTIONS_DATA;

# Path
$path = get_path();

# Page setup
$path['call_parts'][PATH_SITE] = get_lang_slug($GLOBALS['path_lang_matrix'], $_SESSION['lang'], $path['call_parts'][PATH_SITE]);

$page = $path['call_parts'][PATH_SITE];

// If vehicle details site, set $page to respective vehicle
// so that vehicles.php view file is used instead of fleet.php 
if ( (!empty($path['call_parts'][PATH_SITE])) && ($path['call_parts'][PATH_SITE] === F_FLEET) && (!empty($path['call_parts'][PATH_SUBSITE])) ) {
	$path['call_parts'][PATH_SITE] = F_VEHICLE;
	$page = F_VEHICLE;
}

//$page = 'vehicles';
if (!file_exists(D_VIEWS . $page . '.php')) {
	header('Location: ' . get_lang_slug($GLOBALS['path_lang_translate'], $_SESSION['lang'], F_404));
	exit();
}

# HTML code generation and translations
//require_once D_FUNCTIONS.F_HTML_GENERATION;
require_once D_FUNCTIONS.F_TRANSLATION;

// Omit the closing PHP tag to avoid 'headers already sent' errors!
