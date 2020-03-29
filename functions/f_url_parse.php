<?php

function get_path() {
  $path = array();
  if (isset($_SERVER['REQUEST_URI'])) {
    $request_path = explode('?', $_SERVER['REQUEST_URI']);

    $path['base'] = rtrim(dirname($_SERVER['SCRIPT_NAME']), '\/');	
    $path['call_utf8'] = substr(urldecode($request_path[0]), strlen($path['base']) + 1);
    
    $path['call'] = utf8_decode($path['call_utf8']);
    if ($path['call'] == basename($_SERVER['PHP_SELF'])) {
      $path['call'] = '';
    }
    $path['call_parts'] = explode('/', $path['call']);

     // original check
    $query_vars_exist = array_key_exists(1, $request_path) ? TRUE : FALSE;

    if($query_vars_exist === TRUE) {
      $path['query_utf8'] = urldecode($request_path[1]);
      $path['query'] = utf8_decode(urldecode($request_path[1]));
      $vars = explode('&', $path['query']);
      foreach ($vars as $var) {
        $t = explode('=', $var);
        $path['query_vars'][$t[0]] = empty($t[1]) ? '' : $t[1];
      }
    } else {
      $path['query_utf8'] = NULL;
      $path['query'] = NULL;
      $path['query_vars'] = array();
    }
  }
return $path;
}


function get_slug($url) {
	$pos = strrpos($url, '/');
	$slug = substr($url, $pos+1);
	
	return $slug;
}


function get_lang_slug($matrix, $lang, $value) {
  foreach($matrix as $key => $lang_slug) {
    if ($key == $lang) {
      if (!empty($lang_slug[$value])) {
        return $lang_slug[$value];
      } else {
        return '';
      }
    }
  }
  return false;
}

?>