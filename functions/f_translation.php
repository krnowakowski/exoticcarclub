<?php
//http://we-love-php.blogspot.co.uk/2012/07/how-to-implement-i18n-without.html

require_once translate(D_FUNCTIONS.'f_translation_class.php');
$translation = new translationClass;

class My_callback {
	public function __construct(&$lang_file_php) {
		$this->lang_file_php = &$lang_file_php;
	}
	function callback($match) {
		static $strings = null;
		if ($strings===null) require($this->lang_file_php);
		return isset($strings[ $match[1] ]) ? $strings[ $match[1] ] : $match[1];
	}
}

// input: translation.php
// output: cache/<lang>translation.php_<timestamp>.php
function translate($file) {
	$cache_file = SITE_DIR.'cache/'.$_SESSION['lang'].'_'.basename($file).'_'.filemtime($file).'.php';
	// (re)build translation?
	if (!file_exists($cache_file)) {
		$lang_file = SITE_DIR.'lang/'.$_SESSION['lang'].'.ini';
		$lang_file_php = SITE_DIR.'cache/'.$_SESSION['lang'].'_'.filemtime($lang_file).'.php';

		// convert .ini file into .php file
		if (!file_exists($lang_file_php)) {
			file_put_contents($lang_file_php, '<?php $strings='.
			var_export(parse_ini_file($lang_file, false, INI_SCANNER_RAW), true).';', LOCK_EX);
		}
		// translate .php into localized .php file
		$c = new My_callback($lang_file_php);
		$tr = array($c, 'callback');
		//function($match) use (&$lang_file_php) {
		//	static $strings = null;
		//	if ($strings===null) require($lang_file_php);
		//	return isset($strings[ $match[1] ]) ? $strings[ $match[1] ] : $match[1];
		//};
		// replace all {t}abc{/t} by tr()
		file_put_contents($cache_file, preg_replace_callback('!\{t\}([^\{]+)\{/t\}!', $tr, file_get_contents($file)), LOCK_EX);
	}
	return $cache_file;
}

?>