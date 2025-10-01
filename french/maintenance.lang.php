<?php
/**
 * MyBB 1.9 French Language Pack
 * Traduction française pour MyBB 1.9
 * Copyright 2014 MyBB Group, All Rights Reserved
 *
 */

/**
 * Language strings used on maintenance pages and in Process interfaces.
 *
 * Strings in this file may need to remain readable after `strip_tags()` is applied
 */

#region Process - common
$l['operation_error_title'] = 'Erreur — {1}';
$l['operation_error_message'] = 'L’opération a échoué. Veuillez consulter le fichier <code>error.log</code> pour plus de détails.';
$l['operation_warning_title'] = 'Avertissement — {1}';

// navigation
$l['retry'] = 'Réessayer';
$l['retry_step'] = 'Réessayer ?';
$l['retry_operation_confirm'] = 'Réessayer l’opération avant de continuer ?';
$l['retry_parameter_input'] = 'Modifier les valeurs des paramètres ?';
$l['step_finish'] = 'Suivant';
$l['step_final_finish'] = 'Terminer';
$l['waiting_for_operation'] = 'En attente de {1}…';
$l['waiting_for_operation_hidden'] = 'En attente…';
$l['redirecting'] = 'Redirection…';
#endregion

#region CLI
$l['operation_error_details_cli'] = 'Des détails supplémentaires peuvent être disponibles avec le paramètre "-v" (verbose).';

$l['using_env_parameter_value'] = 'Utilisation de la variable d’environnement <{3}> pour {1}';
$l['using_env_parameter_value_revealed'] = 'Utilisation de la variable d’environnement <{3}> pour {1} : "{2}"';

$l['using_default_parameter_value'] = 'Utilisation de la valeur par défaut du paramètre pour {1}';
$l['using_default_parameter_value_revealed'] = 'Utilisation de la valeur par défaut du paramètre pour {1} : "{2}"';

$l['unknown_operation'] = 'Opération inconnue "{1}"';
$l['unknown_parameter'] = 'Paramètre de processus inconnu "{1}"';
#endregion

#region GUI
$l['operation_error_details_http'] = 'Des détails supplémentaires pourraient être disponibles dans la console web.';

$l['optional'] = 'facultatif';
$l['show_password'] = 'Afficher le mot de passe';
$l['weak_password'] = 'Mot de passe faible';

// language select
$l['select_language'] = 'Sélectionner une langue';
$l['change_language'] = 'Appliquer';

// versionCheck action
$l['version_check'] = 'Vérifier la dernière version';
$l['version_check_active'] = 'Vérification en cours…';
$l['version_check_newer'] = 'La version la plus récente est <a href="https://mybb.com/download" target="_blank">{1}</a>';
$l['version_check_latest'] = 'Dernière version';
$l['version_check_error'] = 'Impossible de vérifier automatiquement — rendez-vous sur <a href="https://mybb.com" target="_blank" rel="noreferrer">MyBB.com</a>';

// insecure transport warning
$l['insecure_transport'] = 'Connexion non sécurisée';
$l['insecure_transport_message'] = 'Les informations sensibles saisies ici pourraient être visibles par d’autres. Assurez-vous que le serveur prend en charge HTTPS et utilisez le protocole <code>https://</code> avant de continuer.';

// miscellaneous
$l['support'] = 'Besoin d’aide ? Consultez la <a href="https://docs.mybb.com" target="_blank">documentation officielle</a> et les <a href="https://mybb.com/support" target="_blank">canaux de support</a>.';
$l['powered_by_phrases'] = 'Création d’un nouveau forum
Rassembler les gens autour de
Construire avec
Connecter les gens via
Une communauté sur mesure grâce à
Développer vote potentiel avec
Un forum à votre image
Bientôt propulsé par';
#endregion

#region fatal errors
$l['locked_title'] = 'Déverrouiller pour continuer';
$l['locked'] = 'Veuillez supprimer le fichier <code>{1}</code> dans le répertoire <code>install/</code> afin d’installer ou de mettre à jour ce forum MyBB.';

$l['empty_config_to_reinstall_title'] = 'Avant de réinstaller MyBB';
$l['empty_config_to_reinstall'] = '<p>Si vous êtes sûr de vouloir écraser le forum existant et réinstaller MyBB, videz ou supprimez le fichier de configuration <code>inc/config.php</code> et actualisez cette page.
<br><br>
<p>Si vous souhaitez plutôt mettre à jour votre forum, <a href="./upgrade.php"><strong>cliquez ici</strong></a>.';

$l['upgrade_initialization_failed_title'] = 'Échec de l’initialisation';
$l['upgrade_initialization_failed'] = 'Pour mettre à jour MyBB, un forum fonctionnel est requis. Si vous souhaitez créer un nouveau forum, lancez plutôt le <a href="./index.php?process=install"><strong>processus d’installation</strong></a>.';

$l['upgrade_not_authorized_title'] = 'Autorisation requise pour la mise à jour';
$l['upgrade_not_authorized'] = 'Créez un fichier nommé <code>{1}</code> dans le répertoire d’installation puis actualisez cette page.';

$l['upgrade_not_needed_title'] = 'Votre forum est déjà à jour';
$l['upgrade_not_needed'] = 'Le processus de mise à jour n’est pas nécessaire pour cette version.<br><br>Si vous pensez qu’il s’agit d’une erreur, vous pouvez <a href="./index.php?process=upgrade&force=1">forcer la mise à jour</a>. Sinon, vous pouvez supprimer le répertoire d’installation.</p>';
#endregion

#region common operations content
// flag listing
$l['flags'] = 'Options personnalisées';
$l['flag_value'] = '{1} : {2}';
$l['flag_development_mode'] = 'Mode développement';
$l['flag_no_discovery'] = 'Pas de suggestions pour la base de données';
$l['flag_force'] = 'Forcer la mise à jour';
$l['flag_fast'] = 'Mode développement avec valeurs par défaut';

// installation state
$l['installation_state'] = 'Statut';
$l['installation_state_none'] = 'Non installé';
$l['installation_state_none_description'] = 'Aucune installation de MyBB détectée.';
$l['installation_state_configuration_file'] = '<abbr title="inc/config.php">Fichier de configuration</abbr> sans connexion valide à la base de données';
$l['installation_state_configuration_file_description'] = 'Un <abbr title="inc/config.php">fichier de configuration</abbr> existe, mais aucune connexion à la base de données ne peut être établie.';
$l['installation_state_database_connection'] = '<abbr title="inc/config.php">Fichier de configuration</abbr> avec identifiants valides, aucune donnée dans la base';
$l['installation_state_database_connection_description'] = 'Un <abbr title="inc/config.php">fichier de configuration</abbr> avec des identifiants valides existe, mais aucune donnée n’a été trouvée dans la base de données.';
$l['installation_state_installed'] = 'Version installée {1} ou plus récente';
#endregion

#region data seeding
$l['board_name_default'] = 'Mon forum';
$l['welcome_thread_username'] = 'MyBB';
$l['welcome_thread_subject'] = 'Bienvenue sur MyBB';
$l['welcome_thread_message'] = 'Votre forum a été installé avec succès.

Pour accéder aux ressources de support MyBB, à la documentation, résoudre des problèmes ou envoyer vos retours, rendez-vous à l’adresse suivante :  [url=https://mybb.com/support/]mybb.com/support[/url].

Nous vous invitons à rejoindre la communauté MyBB, composée d’utilisateurs, de créateurs de sites, d’auteurs d’extensions et de développeurs en participant sur les [url=https://community.mybb.com]Forums Communautaires[/url].

Merci,
L’équipe MyBB[color=#ffffff]. [i]Profitez du libre comme jamais.[/i][/color]
';
$l['welcome_thread_message_devmode'] = 'MyBB {2} installé sur {3} en mode développement avec [i]{4}[/i] utilisant [i]{5}[/i].

[list]
[*][url={1}?process=install][color=#007AC8][b]Réinstaller[/b][/color][/url]
[*][url={1}?process=install&dev][color=#007AC8][b]Réinstaller[/b] en mode développement[/color][/url]
[*][url={1}?process=install&fast][color=#007AC8][b]Réinstallation rapide[/b] (mode développement avec valeurs par défaut)[/color][/url]
[/list]
[list]
[*][url={1}?process=upgrade][color=#218463][b]Mettre à jour[/b][/color][/url]
[*][url={1}?process=upgrade&dev][color=#218463][b]Mettre à jour[/b] en mode développement[/color][/url]
[*][url={1}?process=upgrade&fast][color=#218463][b]Mise à jour rapide[/b] (mode développement avec valeurs par défaut)[/color][/url]
[/list]';
#endregion

#region miscellaneous
$l['task_versioncheck_ran'] = 'La tâche de vérification de version a été exécutée avec succès.';
$l['task_versioncheck_ran_errors'] = "Impossible de se connecter à MyBB pour vérifier la version.";
$l['na'] = 'N/A';
#endregion

#region Process Model: install
// general
$l['install_page_title'] = 'Installation de MyBB';
$l['install_header_title'] = 'Installation';

// étapes
$l['install_step_start_title'] = 'Démarrage';
$l['install_step_database_title'] = 'Base de données';
$l['install_step_settings_title'] = 'Paramètres';
$l['install_step_account_title'] = 'Mon compte';

// step pages
$l['install_step_start_heading'] = 'Installer un nouveau forum';
$l['install_step_start_heading_reinstall'] = 'Réinstaller le forum';
$l['install_step_start_description'] = 'Bienvenue dans l’installation de MyBB. Au cours de ce processus, le logiciel de forum sera installé sur votre serveur.';
$l['install_step_start_description_reinstall'] = 'Bienvenue dans l’installation de MyBB. Au cours de ce processus, le logiciel du forum sera réinstallé sur votre serveur et écrasera le forum existant. Un nouveau forum sera créé et toutes les données existantes seront supprimées (souhaitez-vous plutôt <a href="./index.php?process=upgrade"><strong>faire une mise à jour</strong></a> ?).';
$l['install_step_start_description_reinstall_cli'] = 'Bienvenue dans l’installation de MyBB. Au cours de ce processus, le logiciel du forum sera réinstallé sur votre serveur et écrasera le forum existant. Un nouveau forum sera créé et toutes les données existantes seront supprimées.';

$l['install_step_database_heading'] = 'Se connecter à la base de données';
$l['install_step_database_instructions'] = 'Fournissez les informations de connexion à la base de données où le contenu du forum sera stocké. Si vous ne disposez pas de ces informations, elles peuvent généralement être obtenues auprès de votre hébergeur ou une base de données peut être créée depuis le panneau de contrôle de votre hébergement.';

$l['install_step_settings_heading'] = 'Définir les paramètres du forum';
$l['install_step_settings_instructions'] = 'Configurez et vérifiez les paramètres de base de votre nouveau forum. Ils pourront être facilement modifiés plus tard.';

$l['install_step_account_heading'] = 'Créer un compte administrateur';
$l['install_step_account_instructions'] = 'Définissez les informations de connexion pour votre compte administrateur.';


// operations
$l['operation_requirements_check_title'] = 'Vérification des prérequis';
$l['operation_file_verification_title'] = 'Vérification des fichiers';
$l['operation_statistics_title'] = 'Statistiques';
$l['operation_configuration_file_title'] = 'Fichier de configuration';
$l['operation_database_structure_title'] = 'Structure de la base de données';
$l['operation_database_population_title'] = 'Initialisation de la base de données';
$l['operation_board_settings_title'] = 'Paramètres du forum';
$l['operation_user_account_title'] = 'Compte utilisateur';
$l['operation_build_cache_title'] = 'Génération du cache';
$l['operation_lock_title'] = 'Verrouillage de l’installeur';

$l['operation_requirements_check_error_title'] = 'Certains des prérequis ne sont pas remplis';

// parameters
$l['parameter_send_specifications_title'] = 'Envoyer des statistiques anonymes contenant les spécifications du serveur pour aider à améliorer MyBB <a href="https://docs.mybb.com/1.8/install/anonymous-statistics/" target="_blank" rel="noreferrer" title="Plus d’informations sur MyBB.com" class="information"><i class="fas fa-info-circle"></i></a>';

$l['parameter_db_engine_title'] = 'Moteur de base de données';
$l['parameter_db_host_title'] = 'Nom d’hôte de la base de données';
$l['parameter_db_user_title'] = 'Nom d’utilisateur de la base de données';
$l['parameter_db_password_title'] = 'Mot de passe de la base de données';
$l['parameter_db_name_title'] = 'Nom de la base de données';
$l['parameter_db_path_title'] = 'Chemin de la base de données';
$l['parameter_db_table_prefix_title'] = 'Préfixe des tables';

$l['parameter_bbname_title'] = 'Nom du forum';
$l['parameter_bbname_value'] = 'Forums';
$l['parameter_bburl_title'] = 'Adresse du forum';
$l['parameter_adminemail_title'] = 'Adresse électronique d’administration';
$l['parameter_adminemail_description'] = 'L’adresse utilisée pour l’envoi de courriels et le formulaire de contact.';
$l['parameter_cookiedomain_title'] = 'Domaine des cookies';
$l['parameter_cookiepath_title'] = 'Chemin des cookies';
$l['parameter_acp_pin_title'] = 'Code PIN du panneau d’administration';
$l['parameter_acp_pin_description'] = 'Un code facultatif requis pour accéder au panneau d’administration, en plus du mot de passe de chaque compte.';

$l['parameter_account_username_title'] = 'Nom d’utilisateur';
$l['parameter_account_email_title'] = 'Adresse électronique';
$l['parameter_account_password_title'] = 'Mot de passe';

// parameter notes
$l['deferred_default_parameter_note_db_host'] = 'Serveur détecté';
$l['deferred_default_parameter_note_db_user'] = 'Identifiants détectés';
$l['deferred_default_parameter_note_db_name'] = 'Base de données détectée';

// parameter feedback
$l['parameter_feedback_settings_bburl_loopback'] = 'L’adresse peut ne pas être accessible depuis d’autres appareils';

$l['parameter_feedback_database_check_server_success'] = 'Serveur accessible';
$l['parameter_feedback_database_check_server_error'] = 'Serveur inaccessible';
$l['parameter_feedback_database_check_authentication_success'] = 'Authentification réussie';
$l['parameter_feedback_database_check_authentication_error'] = 'Impossible de s’authentifier';
$l['parameter_feedback_database_check_database_success'] = 'Base de données accessible';
$l['parameter_feedback_database_check_database_error'] = 'Base de données inaccessible';
$l['parameter_feedback_database_check_prefix_tables_success'] = 'Aucune table existante avec ce préfixe';
$l['parameter_feedback_database_check_prefix_tables_warning'] = '{1} table(s) existante(s) avec ce préfixe seront écrasées';

// operations content
$l['version_to_be_installed'] = 'Version qui sera installée';

$l['php_version_incompatible'] = 'PHP {1} ou une version plus récente est requis (actuellement {2})';
$l['no_multi_byte_extensions'] = 'Aucune extension PHP pour la gestion des caractères multi-octets n’est disponible (<code>mbstring</code>, <code>iconv</code>)';
$l['no_database_drivers'] = 'Aucun pilote de moteur de base de données n’est disponible (MySQL, PostgreSQL, SQLite)';
$l['no_xml_support'] = 'Aucune extension PHP pour le support XML n’est disponible (<code>xml</code>)';
$l['directory_not_writable'] = 'Le répertoire <code>{1}</code> n’est pas accessible en écriture. Veuillez <a href="https://docs.mybb.com/1.8/administration/security/file-permissions" target="_blank" rel="noreferrer">ajuster les permissions</a> pour permettre l’écriture.';
$l['file_not_writable'] = 'Le fichier <code>{1}</code> n’est pas accessible en écriture. Veuillez <a href="https://docs.mybb.com/1.8/administration/security/file-permissions" target="_blank" rel="noreferrer">ajuster les permissions</a> pour permettre l’écriture.';
$l['lock_file_not_writable'] = 'Impossible de créer le fichier de verrouillage <code>{1}</code>. Veuillez supprimer le répertoire d’installation avant de continuer sur votre forum.';

$l['file_verification_checksums_missing'] = 'Impossible de vérifier les fichiers car le fichier <code>{1}</code> est manquant. Vous pouvez télécharger ce fichier depuis un <a href="https://mybb.com/download" target="_blank" rel="noreferrer">package MyBB officiel</a>. Ce fichier peut ne pas être inclus dans les versions destinées au développement.';
$l['file_verification_failed'] = 'Les fichiers suivants ({1}) pourraient être corrompus. Vous devriez les copier depuis un <a href="https://mybb.com/download" target="_blank">package MyBB officiel</a> avant de continuer.';
$l['file_verification_changed'] = 'Modifié : {1}';
$l['file_verification_missing'] = 'Manquant : {1}';

$l['could_not_write_configuration_file'] = 'Impossible d’écrire les données dans le fichier de configuration.';
$l['could_not_connect_to_database'] = 'Impossible de se connecter à la base de données avec les paramètres enregistrés.';
$l['database_parameter_check_failed'] = 'Impossible de se connecter à la base de données avec les paramètres saisis.';
$l['configuration_file_not_installed'] = 'Aucun fichier de configuration installé trouvé.';
#endregion

#region Process Model: upgrade
// general
$l['upgrade_page_title'] = 'Mise à jour de MyBB';
$l['upgrade_header_title'] = 'Mise à jour';

// steps
$l['upgrade_step_start_title'] = 'Démarrage';
$l['upgrade_step_migration_title'] = 'Migration';
$l['upgrade_step_rebuilding_title'] = 'Reconstruction';

// step pages
$l['upgrade_step_start_heading'] = 'Mettre à jour le logiciel du forum';
$l['upgrade_step_start_description'] = 'Bienvenue dans la mise à jour de MyBB. Ce processus mettra à jour votre forum pour utiliser la dernière version du logiciel.<br><br>Nous recommandons vivement de créer une sauvegarde de votre base de données et de vos fichiers, et de la vérifier avant la mise à jour.';
$l['upgrade_step_start_description_link'] = 'Bienvenue dans la mise à jour de MyBB. Ce processus mettra à jour votre forum pour utiliser la dernière version du logiciel (souhaitez-vous plutôt <a href="./index.php?process=install"><strong>réinstaller</strong></a> ?).<br><br>Nous recommandons vivement de créer une sauvegarde de votre base de données et de vos fichiers et d’effectuer des vérifications avant la mise à jour.';

$l['upgrade_step_migration_heading'] = 'Migration des données';
$l['upgrade_step_migration_description'] = 'Les scripts de mise à jour applicables vont maintenant être exécutés.';

$l['upgrade_step_rebuilding_heading'] = 'Reconstruction des informations';
$l['upgrade_step_rebuilding_description'] = 'Les paramètres et les caches seront régénérés.';


// operations
$l['operation_upgrade_plan_title'] = 'Planification de la mise à jour';
$l['operation_update_settings_title'] = 'Reconstruction des paramètres';

// paramètres
$l['parameter_upgrade_start_title'] = 'Numéro de version de départ';
$l['parameter_upgrade_start_description'] = 'La mise à jour sélectionnée, ainsi que toutes les mises à jour des versions ultérieures, sera appliquée.';

// operations content
$l['upgrade_version_to_be_installed'] = 'Version à installer après mise à jour';
$l['upgrades_to_apply'] = 'Mises à jour à appliquer';
$l['upgrade_to_apply'] = '#{1} (depuis la version {2})';
#endregion
