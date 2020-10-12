<?php

/***************************************************************************\
 *  SPIP, Systeme de publication pour l'internet                           *
 *                                                                         *
 *  Copyright (c) 2001-2019                                                *
 *  Arnaud Martin, Antoine Pitrou, Philippe Riviere, Emmanuel Saint-James  *
 *                                                                         *
 *  Ce programme est un logiciel libre distribue sous licence GNU/GPL.     *
 *  Pour plus de details voir le fichier COPYING.txt ou l'aide en ligne.   *
\***************************************************************************/

if (!defined("_ECRIRE_INC_VERSION")) {
	return;
}

function action_relancer_signature_dist($id_signature = null) {
	if (!$id_signature) {
		$securiser_action = charger_fonction('securiser_action', 'inc');
		$id_signature = $securiser_action();
	}

	if (autoriser('relancer', 'signature', $id_signature)) {
		$row = sql_fetsel('*', 'spip_signatures', 'id_signature=' . intval($id_signature));

		$id_ecole = $row['id_ecole'];
		$row_ecole = sql_fetsel('*', 'spip_ecoles_alumni', 'id_ecole=' . intval($id_ecole));

		$id_pays_ecole = $row_ecole['id_pays'];
		$row_pays_ecole = sql_fetsel('*', 'spip_pays', 'id_pays=' . intval($id_pays_ecole));
		$row_pays_ecole['nom_ecole'] = explode("[fr]",$row_pays_ecole['nom_ecole'])[1];
		$row_pays_ecole['nom_ecole'] = explode("[en]",$row_pays_ecole['nom_ecole'])[0];

		$id_gis = $row['id_gis'];
		$row_gis = sql_fetsel('*', 'spip_gis', 'id_gis=' . intval($id_gis));

		$id_article = sql_getfetsel('id_article', 'spip_petitions', 'id_petition=' . intval($row['id_petition']));
		if ($id_article = intval($id_article)
			and autoriser('mordererpetition', 'article', $id_article)
		) {
			include_spip('action/editer_signature');
			include_spip('formulaires/signature');
			$url = generer_url_entite_absolue($id_article, 'article', '', '', true);
			if (signature_a_confirmer($id_article, $url, $row['prenom_email'], $row['nom_email'], $row['annee_naissance'], 
				$row['ad_email'], $row_ecole['nom_ecole'], $row_pays_ecole['nom_ecole'], $row['membre_asso_alumni'], 
				$row['linkedin'], $row['organisation'], $row['fonction_organisation'], $row_gis['pays'], 
				$row_gis['ville'], $row_gis['code_postal'], $row['autorisation_infos_publiques'], $row['nom_site'],$row['url_site'], $row['message'], 
				$row['lang'], $row['statut'])) {
				signature_modifier($id_signature, array("date_time" => date('Y-m-d H:i:s')));
			}
		}
	}
}
