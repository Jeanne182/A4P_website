<?php
/**
 * API de vérification : vérification de la validité d'une valeur selon une expression régulière
 *
 * @plugin     verifier
 * @copyright  2018
 * @author     Les Développements Durables
 * @licence    GNU/GPL
 */

// Sécurité
if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

/**
 * Vérifié une valeur suivant une expression régulière.
 *
 * Options :
 * - modele : chaine représentant l'expression
 *
 * @param string $valeur
 *   La valeur à vérifier.
 * @param array $options
 *   Contient une chaine représentant l'expression.
 * @return string
 *   Retourne une chaine vide si c'est valide, sinon une chaine expliquant l'erreur.
 */
function verifier_regex_dist($valeur, $options = array()) {
	if (!empty($options['message_erreur'])) {
		$erreur = _T_ou_typo($options['message_erreur']);
	} else {
		$erreur = _T('verifier:erreur_regex');
	}
	if (!is_string($valeur)) {
		return $erreur;
	}

	if (preg_match($options['modele'], $valeur)) {
		return '';
	}

	return $erreur;
}
