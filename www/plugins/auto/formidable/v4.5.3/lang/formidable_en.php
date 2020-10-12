<?php
// This is a SPIP language file  --  Ceci est un fichier langue de SPIP
// extrait automatiquement de https://trad.spip.net/tradlang_module/formidable?lang_cible=en
// ** ne pas modifier le fichier **

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

$GLOBALS[$GLOBALS['idx_lang']] = array(

	// A
	'activer_pages_explication' => 'By default, public pages of the forms are not allowed',
	'activer_pages_label' => 'Activate creation of public pages for the forms.',
	'admin_reponses_auteur' => 'Allow forms author to modify the answers', # MODIF
	'admin_reponses_auteur_explication' => 'Only administrators can normally modify the answers filled in a form (to the bin, published, proposed to evaluation). This option allows the author of a form to modify the status (with the risk to alterate potentiall statistics)
', # MODIF
	'analyse_avec_reponse' => 'Non-empty answers',
	'analyse_exclure_champs_explication' => 'Insert the name of the fields to exclude, separated by <code>|</code>. Do not insert <code>@</code>.

',
	'analyse_exclure_champs_label' => 'Fields to be excluded from the analysis',
	'analyse_exporter' => 'Export analysis',
	'analyse_longueur_moyenne' => 'Average number in words length',
	'analyse_nb_reponses_total' => '@nb@ people responded to this form.',
	'analyse_sans_reponse' => 'Stayed unanswered',
	'analyse_une_reponse_total' => 'One person responded to this form.',
	'analyse_zero_reponse_total' => 'No one responded to this form.', # MODIF
	'aucun_traitement' => 'No treatment',
	'autoriser_admin_restreint' => 'Allow restricted administrators to create and modify forms', # MODIF
	'autoriser_admin_restreint_explication' => 'By default, only administrators have access to the creation and modification of forms', # MODIF

	// B
	'bouton_formulaires' => 'Forms',
	'bouton_revert_formulaire' => 'Back to the last saved version',

	// C
	'cfg_analyse_classe_explication' => 'You can specify CSS classes that will be added on the container of each graph, such as 
<code>gray</code>,<code>blue</code>,
		<code>orange</code>, <code>green</code> or whatever you like!',
	'cfg_analyse_classe_label' => 'CSS class of the progress bar',
	'cfg_objets_explication' => 'Choose the content to which the forms can be linked.',
	'cfg_objets_label' => 'Link forms to content',
	'cfg_titre_page_configurer_formidable' => 'Configure Formidable',
	'champs' => 'Fields',
	'changer_statut' => 'This form is:', # MODIF
	'creer_dossier_formulaire_erreur_impossible_creer' => 'Impossible to create @dossier@ folder, needed to store files. Check access rights.',
	'creer_dossier_formulaire_erreur_impossible_ecrire' => 'Impossible to create @dossier@ folder, needed to store files. Check access rights.',
	'creer_dossier_formulaire_erreur_possible_lire_exterieur' => 'It is possible to remotely read the contents of the folder @dossier@. This is problematic in terms of data confidentiality.',

	// E
	'echanger_formulaire_forms_importer' => 'Forms & Tables (.xml)',
	'echanger_formulaire_wcs_importer' => 'W.C.S. (.wcs)',
	'echanger_formulaire_yaml_importer' => 'Formidable (.yaml)',
	'editer_apres_choix_formulaire' => 'The form, again',
	'editer_apres_choix_redirige' => 'Redirect to a new address',
	'editer_apres_choix_rien' => 'Nothing',
	'editer_apres_choix_stats' => 'Answers statistics',
	'editer_apres_choix_valeurs' => 'The entered values',
	'editer_apres_explication' => 'After validation, display instead of the form:', # MODIF
	'editer_apres_label' => 'Display then',
	'editer_css' => 'CSS Classes ',
	'editer_descriptif' => 'Description',
	'editer_descriptif_explication' => 'An explanation of the form for the private area.',
	'editer_globales_etapes_activer_explication' => 'When this option is active, each group of first-level fields is transformed into a form step',
	'editer_globales_etapes_activer_label_case' => 'Activate multi-step management',
	'editer_globales_texte_submit_label' => 'Text of the validation button',
	'editer_identifiant' => 'Login',
	'editer_identifiant_explication' => 'Give a single textual identifier that allows you to call the form more easily. The identifier can only contain digits, Latin letters not accented and the character "_"',
	'editer_menu_auteurs' => 'Configure authors',
	'editer_menu_champs' => 'Configure the fields',
	'editer_menu_formulaire' => 'Configure the form',
	'editer_menu_traitements' => 'Configure the treatments',
	'editer_message_erreur_unicite_explication' => 'If you leave this field empty, the Formidable default error message will be shown',
	'editer_message_erreur_unicite_label' => 'Error message when a field is not unique',
	'editer_message_ok' => 'Return message',
	'editer_message_ok_explication' => 'You can customize the message that will be displayed to the user after submitting a valid form. It is possible to display the value of some submitted fields using @raccourci@.', # MODIF
	'editer_modifier_formulaire' => 'Modify the form',
	'editer_nouveau' => 'New form',
	'editer_redirige_url' => 'Forwarding address after validation',
	'editer_redirige_url_explication' => 'Leave blank if you want to stay on the same page',
	'editer_titre' => 'Title',
	'editer_unicite_explication' => 'Save the form only if the value of a specific field is unique among all the saved responses.',
	'editer_unicite_label' => 'Verify that this field is unique',
	'erreur_autorisation' => 'You do not have the right to edit the website forms',
	'erreur_base' => 'An error occurred as the data was being saved.',
	'erreur_deplacement_fichier' => 'The file "@nom@" could not be stored correctly by the system. Contact the webmaster.',
	'erreur_fichier_expire' => 'The link to download the file is too old.',
	'erreur_fichier_introuvable' => 'The requested file was not found.',
	'erreur_generique' => 'There are errors in the fields below. Please check.',
	'erreur_identifiant' => 'This login is already used.',
	'erreur_identifiant_format' => 'The identifier can only contain digits, Latin letters not accented and the character "_"',
	'erreur_importer_forms' => 'Error while importing the Forms&Tables form',
	'erreur_importer_wcs' => 'Error while importing the W.C.S form',
	'erreur_importer_yaml' => 'Error while importing the YAML file',
	'erreur_inexistant' => 'This form doesn’t exist.',
	'erreur_unicite' => 'This value is already in use',
	'exporter_adresses_ip' => 'Include IP addresses in the export of answers',
	'exporter_adresses_ip_explication' => 'By default, IP addresses are not included in the export of replies',
	'exporter_formulaire_cle_ou_valeur_cle_label' => 'Keys',
	'exporter_formulaire_cle_ou_valeur_label' => 'For radio buttons, drop-down lists, etc., should human-readable values (labels) or keys be exported?',
	'exporter_formulaire_cle_ou_valeur_valeur_label' => 'Readable values (labels)',
	'exporter_formulaire_date_debut_label' => 'From (included)',
	'exporter_formulaire_date_erreur' => 'The start date must be before the end date',
	'exporter_formulaire_date_fin_label' => 'Until (included)',
	'exporter_formulaire_format_label' => 'File format',
	'exporter_formulaire_ignorer_fichiers_label' => 'Do not attach files',
	'exporter_formulaire_statut_label' => 'Answers',

	// F
	'formulaires_aucun' => 'There is no form for now',
	'formulaires_aucun_champ' => 'There is currently no entry field for this form.',
	'formulaires_corbeille_tous' => '@nb@ forms in the trash',
	'formulaires_corbeille_un' => 'One form in the trash',
	'formulaires_dupliquer' => 'Duplicate the form',
	'formulaires_dupliquer_copie' => '(copy)',
	'formulaires_introduction' => 'Create and configure forms on your site here.',
	'formulaires_nouveau' => 'Create a new form',
	'formulaires_reponses_corbeille_tous' => '@nb@ form responses in the trash',
	'formulaires_reponses_corbeille_un' => 'A form response in the trash',
	'formulaires_supprimer' => 'Delete the form',
	'formulaires_supprimer_confirmation' => 'Beware, it will also remove all the results. Are you sure you want to delete this form?',
	'formulaires_tous' => 'All forms',

	// H
	'heures_minutes_secondes' => '@h@h @m@min @s@s',

	// I
	'id_formulaires_reponse' => 'Answer identifier',
	'identification_par_cookie' => 'By cookie (random identifier, does not store any personal information) ',
	'identification_par_id_auteur' => 'By login (id_auteur) of the authenticated person',
	'importer_formulaire' => 'Import a form',
	'importer_formulaire_fichier_label' => 'File to import',
	'importer_formulaire_format_label' => 'File format',
	'info_1_formulaire' => '1 form',
	'info_1_reponse' => '1 answer',
	'info_aucun_formulaire' => 'No form',
	'info_aucune_reponse' => 'No answer',
	'info_formulaire_refuse' => 'Archived',
	'info_formulaire_utilise_par' => 'Form used by:', # MODIF
	'info_nb_formulaires' => '@nb@ forms',
	'info_nb_reponses' => '@nb@ answers',
	'info_reponse_proposee' => 'To moderate',
	'info_reponse_proposees' => 'To moderate',
	'info_reponse_publiee' => 'Validated',
	'info_reponse_publiees' => 'Validated',
	'info_reponse_refusee' => 'Rejected',
	'info_reponse_refusees' => 'Rejected',
	'info_reponse_supprimee' => 'Deleted',
	'info_reponse_supprimees' => 'Deleted',
	'info_reponse_toutes' => 'All',
	'info_utilise_1_formulaire' => 'Form used:', # MODIF
	'info_utilise_nb_formulaires' => 'Forms used:', # MODIF

	// J
	'jours_heures_minutes_secondes' => '@j@j @h@h @m@min @s@s',

	// L
	'lien_expire' => 'Link expiring in @delai@',
	'liens_ajouter' => 'Add a form',
	'liens_ajouter_lien' => 'Add this form',
	'liens_creer_associer' => 'Create and associate a form',
	'liens_retirer_lien_formulaire' => 'Remove this form',
	'liens_retirer_tous_liens_formulaires' => 'Remove all forms',

	// M
	'minutes_secondes' => '@m@min @s@s',
	'modele_label_formulaire_formidable' => 'Which form ?',
	'modele_nom_formulaire' => 'one form',

	// N
	'noisette_label_afficher_titre_formulaire' => 'Dispaly the title of the form ?',
	'noisette_label_identifiant' => 'Form to display :', # MODIF
	'noisette_nom_noisette_formulaire' => 'Form',

	// P
	'pas_analyse_fichiers' => 'Formidable does not offer (yet) scan of sent files',

	// R
	'reponse_aucune' => 'No answer',
	'reponse_intro' => '@auteur@ answered to the form @formulaire@',
	'reponse_maj' => 'Last update',
	'reponse_numero' => 'Answer number :', # MODIF
	'reponse_statut' => 'This answer is :', # MODIF
	'reponse_supprimer' => 'Delete this reply',
	'reponse_supprimer_confirmation' => 'Do you really wish to delete this reply?',
	'reponse_une' => '1 reply',
	'reponses_analyse' => 'Answer analysis',
	'reponses_anonyme' => 'Anonymous',
	'reponses_auteur' => 'User',
	'reponses_exporter' => 'Export the answers',
	'reponses_exporter_format_csv' => 'Spreadsheet.CSV',
	'reponses_exporter_format_xls' => 'Excel .XLS',
	'reponses_exporter_statut_publie' => 'Published',
	'reponses_exporter_statut_tout' => 'All',
	'reponses_exporter_telecharger' => 'Download',
	'reponses_ip' => 'IP address',
	'reponses_liste' => 'Answers list',
	'reponses_liste_prop' => 'Answers pending for validation',
	'reponses_liste_publie' => 'All validated answers',
	'reponses_nb' => '@nb@ answers',
	'reponses_supprimer' => 'Delete all answers ',
	'reponses_supprimer_confirmation' => 'Are you sure you want to delete all answers to this form?',
	'reponses_voir_detail' => 'See the answer',
	'retour_aucun_traitement' => 'Your reply was accepted. But as the function of the form has not yet been configured, nothing was done with your data!',

	// S
	'sans_reponses' => 'Unanswered',
	'secondes' => '@s@s',

	// T
	'texte_statut_poubelle' => 'deleted',
	'texte_statut_propose_evaluation' => 'proposed',
	'texte_statut_publie' => 'validated',
	'texte_statut_refuse' => 'archived',
	'texte_statut_refusee' => 'rejected',
	'titre_cadre_raccourcis' => 'Shortcuts',
	'titre_formulaires_archives' => 'Archives',
	'titre_formulaires_poubelle' => 'deleted',
	'titre_reponses' => 'Answers',
	'traitements_actives' => 'Activated treatments',
	'traitements_aide_memoire' => 'List of shortcuts:',
	'traitements_avertissement_creation' => 'Changes to the form fields have been successfully saved. You can now define which treatments will be performed when using the form.',
	'traitements_avertissement_modification' => 'Changes to the form fields have been successfully saved. <strong>Some treatments may need to be reconfigured accordingly.</ strong>',
	'traitements_champ_aucun' => 'None',
	'traiter_email_AR_label' => 'Acknowledgement of receipt',
	'traiter_email_accuse_explication_texte' => 'To enable the acknowledgment of receipt feature, you must first define a sender.',
	'traiter_email_contenu_courriel_label' => 'Content of the email',
	'traiter_email_description' => 'Post by email the result of the form to a list of recipients.', # MODIF
	'traiter_email_destinataires_courriel_label' => 'Recipients of the email',
	'traiter_email_envoyeur_courriel_label' => 'Email sender', # MODIF
	'traiter_email_horodatage' => 'Form "@formulaire@" sent on @date@ at @heure@.',
	'traiter_email_message_erreur' => 'An error occurred when sending the email.',
	'traiter_email_message_ok' => 'Your message has been successfully sent by email.',
	'traiter_email_option_activer_accuse_label_case' => 'Also send an email to the sender with a confirmation message.', # MODIF
	'traiter_email_option_activer_ip_label_case' => 'Send the IP address of the sender to the recipients.', # MODIF
	'traiter_email_option_courriel_envoyeur_accuse_explication' => 'Specify the email used to send the acknowledgment. If you do not put anything, it will be the email address of the webmaster.',
	'traiter_email_option_courriel_envoyeur_accuse_label' => 'Sender’s email of the acknowledgment', # MODIF
	'traiter_email_option_destinataires_champ_form_attention' => 'This option is deprecated because it is a call to SPAM.
<br /> - To send to an author of the site, use the option "Recipient" (above).
<br /> - To send to the person filling out the form, configure the acknowledgment of receipt (lower).
<br />
This option is only retained for backward compatibility. It does not appear on the new forms.', # MODIF
	'traiter_email_option_destinataires_champ_form_explication' => 'If one of the fields is an email address and you want to send the form to this address, select the field.',
	'traiter_email_option_destinataires_champ_form_label' => 'The recipient is in one of the fields of the forms',
	'traiter_email_option_destinataires_explication' => 'Choose the field that corresponds to the message recipients. <br />
This is a "Recipients" or "Hidden Field" , including the numeric identifier of an author of the site.',
	'traiter_email_option_destinataires_label' => 'Recipients',
	'traiter_email_option_destinataires_plus_explication' => 'A list of addresses separated by commas.',
	'traiter_email_option_destinataires_plus_label' => 'Extra recipients',
	'traiter_email_option_destinataires_selon_champ_explication' => 'Allows you to specify one or more recipients based on the value of a field.
Indicate the field, its value, and the concerned email(s) (separated by a comma) according to this format, such as: "@selection_1@/choix1 : mail@example.tld". You can specify multiple tests, returning to the line between each test.', # MODIF
	'traiter_email_option_destinataires_selon_champ_label' => 'Recipients according to a field',
	'traiter_email_option_envoyeur_courriel_explication' => 'Select the field that will contain the email address of the sender.',
	'traiter_email_option_envoyeur_courriel_label' => 'Sender Email', # MODIF
	'traiter_email_option_envoyeur_nom_explication' => 'Build this name using the @raccourcis@ (see the notes). If you enter nothing, it will be the name of the site.',
	'traiter_email_option_envoyeur_nom_label' => 'Name of sender',
	'traiter_email_option_exclure_champs_email_explication' => 'If you do not want certain fields to appear in sent emails (for example hidden fields), just define them here, separated by a comma.',
	'traiter_email_option_exclure_champs_email_label' => 'Fields to exclude from the message content',
	'traiter_email_option_masquer_champs_vide_label_case' => 'Hide empty fields',
	'traiter_email_option_masquer_liens_label_case' => 'Hide administration links in the email.',
	'traiter_email_option_masquer_valeurs_accuse_label_case' => 'Do not send the response values in the acknowledgement of receipt',
	'traiter_email_option_nom_envoyeur_accuse_explication' => 'Specify the name of the sender used to send the acknowledgment. If you do not put anything, it will be the name of the site.', # MODIF
	'traiter_email_option_nom_envoyeur_accuse_label' => 'Name of the sender of the acknowledgment', # MODIF
	'traiter_email_option_pj_explication' => 'If the documents posted weigh less than _FORMIDABLE_TAILLE_MAX_FICHIERS_EMAIL Mio (constant modifiable by the webmaster).', # MODIF
	'traiter_email_option_pj_label' => 'Join the files in the email',
	'traiter_email_option_sujet_accuse_label' => 'Subject of the acknowledgement of receipt',
	'traiter_email_option_sujet_explication' => 'Build topic using @raccourcis@. If you enter nothing, the subject will be built automatically.',
	'traiter_email_option_sujet_label' => 'Message subject',
	'traiter_email_option_sujet_valeurs_brutes_label' => 'Raw values',
	'traiter_email_option_sujet_valeurs_brutes_label_case' => 'The email is for a robot and not for a human. In the subject of the message, put the raw values (understandable by robots) fields and not the interpreted values (comprehensible by humans).',
	'traiter_email_option_texte_accuse_label' => 'Text of the acknowledgement of receipt',
	'traiter_email_option_vrai_envoyeur_explication' => 'Some SMTP servers do not allow to use arbitrary email for the "From" field. For this reason Formidable inserts by default the sender’s email in the "Reply-To" field, and uses the webmaster’s email in the "From" field. Check here to insert the email in the "From" field. ',
	'traiter_email_option_vrai_envoyeur_label' => 'Insert email of the sender in the "From" field',
	'traiter_email_page' => '<a href="@url@">From this page</a>.',
	'traiter_email_sujet' => '@nom@ has written to you.',
	'traiter_email_sujet_accuse' => 'Thank you for you reply.',
	'traiter_email_sujet_courriel_label' => 'Message subject',
	'traiter_email_titre' => 'Send by email',
	'traiter_email_url_enregistrement' => 'You can manage all the answers <a href="@url@">on this page</a>.',
	'traiter_email_url_enregistrement_precis' => 'You can see this answer <a href="@url@"> on this page</a>.',
	'traiter_enregistrement_description' => 'Save the form results in the database',
	'traiter_enregistrement_divers' => 'Miscellaneous',
	'traiter_enregistrement_donnees_personelles' => 'Personal data',
	'traiter_enregistrement_erreur_base' => 'An error occurred while writing to the database',
	'traiter_enregistrement_erreur_deja_repondu' => 'You have already filled in this form.',
	'traiter_enregistrement_erreur_edition_reponse_inexistante' => 'The answer to edit can not be found.',
	'traiter_enregistrement_identification_reponses' => 'Identification of responses',
	'traiter_enregistrement_message_ok' => 'Thanks. Your answers have been correctly saved.',
	'traiter_enregistrement_option_anonymiser_label' => 'Do not keep the ID of the connected person.',
	'traiter_enregistrement_option_auteur' => 'Link authors to the forms', # MODIF
	'traiter_enregistrement_option_auteur_explication' => 'Bind one or more authors to a form. If activated, this option prevents anyone except the author(s) to access form’s configuration or results.', # MODIF
	'traiter_enregistrement_option_effacement_delai_label' => 'Number of days before deletion',
	'traiter_enregistrement_option_effacement_label' => 'Regularly clear  the oldest results',
	'traiter_enregistrement_option_identification_explication' => 'Which process should be used first to find out the answer previously provided by the user? ',
	'traiter_enregistrement_option_identification_label' => 'Identification method ',
	'traiter_enregistrement_option_identification_variable_php_label' => 'PHP variable',
	'traiter_enregistrement_option_invalider_explication' => 'If the responses to this form are used publicly, you can refresh the cache when a new answer is sent.',
	'traiter_enregistrement_option_invalider_label' => 'Refresh the cache',
	'traiter_enregistrement_option_ip_label' => 'Record IPs (hidden after a period of retention)',
	'traiter_enregistrement_option_moderation_label' => 'Moderation',
	'traiter_enregistrement_option_modifiable_explication' => 'Editable: Visitors can change their answers afterwards.', # MODIF
	'traiter_enregistrement_option_modifiable_label' => 'Answers can be modified',
	'traiter_enregistrement_option_multiple_explication' => 'Multiple: A single person may answer several times.',
	'traiter_enregistrement_option_multiple_label' => 'Multiple answers',
	'traiter_enregistrement_option_resume_reponse_explication' => 'This string will be used to display a summary of each answer in the lists. Fields such as <tt>@input_1@</tt> will be replaced as indicated by the help sheet opposite.',
	'traiter_enregistrement_option_resume_reponse_label' => 'Summarized display of the answer',
	'traiter_enregistrement_titre' => 'Record the results',

	// V
	'voir_exporter' => 'Export the form',
	'voir_numero' => 'Form number :',
	'voir_reponses' => 'See the answers',
	'voir_traitements' => 'Treatments'
);
