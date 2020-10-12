<?php
 
// sécurité
if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}
ini_set ("display_errors", "On");
define('SPIP_ERREUR_REPORT',E_ERROR);
$GLOBALS['forcer_lang'] = true;
/*
// on ajoute la langue d'origine dans le contexte systematiquement.
if (!$langue = _request('lang')) {
	include_spip('inc/lang');
	$langues = explode(',', $GLOBALS['meta']['langues_multilingue']);
	// si la langue est definie dans l'url (en/ ou fr/) on l'utilise
	if (preg_match(',^' . $GLOBALS['meta']['adresse_site'] . '/(' . join('|',$langues) . ')/,', 'http://' . $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'], $r)) {
		$langue = $r[1];
		changer_langue($langue);
	} else {
		$langue = utiliser_langue_visiteur();
		if (!in_array($langue, $langues)) {
			//$langue = "en"; // pour ne pas s'embeter !
			$langue = $GLOBALS['meta']['langue_site'];
		}
	}
	// stocker dans $_GET
	set_request('lang', $langue);
}

// stocker la langue en cookie...
if ($langue != $_COOKIE['spip_lang']) {
	include_spip('inc/cookie');
	spip_setcookie('spip_lang', $langue);
}
 */
