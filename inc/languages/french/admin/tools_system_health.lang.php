<?php
/**
 * MyBB 1.9 French Language Pack
 * Traduction française pour MyBB 1.9
 * Copyright 2014 MyBB Group, All Rights Reserved
 *
 */

$l['system_health'] = "État du système";
$l['system_health_desc'] = "Cette page vous permet de consulter l’état de votre système.";
$l['utf8_conversion'] = "Conversion en UTF-8";
$l['utf8_conversion_desc'] = "Vous êtes en train de convertir une table de votre base de données au format UTF-8. Cette opération peut prendre de quelques secondes à plusieurs heures selon la taille de votre base de données. Une fois terminée, vous serez redirigé vers la page précédente.";
$l['utf8_conversion_desc2'] = "Cette page vous permet de vérifier que les tables de votre base de données sont bien au format UTF-8 et vous permet de les convertir si nécessaire.";

$l['convert_all'] = "Convertir toutes les tables";
$l['converting_to_utf8'] = "Conversion de la table « {1} » vers UTF-8 depuis {2}.";
$l['convert_to_utf8'] = "Vous êtes sur le point de convertir la table « {1} » vers UTF-8 depuis {2}.";
$l['convert_all_to_utf'] = "Vous êtes sur le point de convertir toutes les tables vers UTF-8 depuis {1}.";
$l['convert_all_to_utf8mb4'] = "Vous êtes sur le point de convertir toutes les tables vers utf8mb4 depuis {1}.";
$l['converting_to_utf8mb4'] = "Conversion de la table « {1} » vers utf8mb4 depuis {2}.";
$l['please_wait'] = "Veuillez patienter…";
$l['converting_table'] = "Conversion de la table : {1}";
$l['convert_table'] = "Conversion de la table";
$l['convert_tables'] = "Convertir toutes les tables";
$l['convert_database_table'] = "Convertir";
$l['convert_database_tables'] = "Convertir";
$l['table'] = "Table";
$l['status_utf8'] = "Statut UTF-8";
$l['status_utf8mb4'] = "Support utf8mb4<br />(requiert MySQL 5.5.3 ou supérieur)";
$l['not_available'] = "Indisponible";
$l['all_tables'] = "Toutes les tables";
$l['convert_now'] = "Convertir";
$l['totals'] = "Totaux";
$l['attachments'] = "Pièces jointes";
$l['total_database_size'] = "Taille totale de la base de données";
$l['attachment_space_used'] = "Espace utilisé par les pièces jointes";
$l['total_cache_size'] = "Taille totale du cache";
$l['estimated_attachment_bandwidth_usage'] = "Estimation de la bande passante utilisée par les pièces jointes";
$l['max_upload_post_size'] = "Taille maximale des fichiers téléversés / requêtes POST";
$l['average_attachment_size'] = "Taille moyenne des pièces jointes";
$l['stats'] = "Statistiques";
$l['task'] = "Tâche";
$l['run_time'] = "Date d’exécution";
$l['next_3_tasks'] = "Prochaines tâches planifiées";
$l['no_tasks'] = "Aucune tâche n’est planifiée pour le moment.";
$l['backup_time'] = "Date de la sauvegarde";
$l['no_backups'] = "Il n’y a actuellement aucune sauvegarde de votre base de données.";
$l['existing_db_backups'] = "Sauvegardes de la base de données existantes";
$l['writable'] = "Accessible en écriture";
$l['not_writable'] = "Non accessible en écriture";
$l['please_chmod_777'] = "Veuillez appliquer les permissions (CHMOD 777).";
$l['chmod_info'] = "Veuillez modifier les permissions comme indiqué dans le tableau ci-dessous. Pour plus d’informations, consultez : ";
$l['file'] = "Fichier";
$l['location'] = "Emplacement";
$l['settings_file'] = "Fichier de paramètres";
$l['config_file'] = "Fichier de configuration";
$l['file_upload_dir'] = "Dossier d’enregistrement des fichiers chargés";
$l['avatar_upload_dir'] = "Dossier d’enregistrement des avatars";
$l['language_files'] = "Fichiers de langue";
$l['backup_dir'] = "Dossier des sauvegardes";
$l['cache_dir'] = "Dossier du cache";
$l['themes_dir'] = "Dossier des thèmes";
$l['chmod_files_and_dirs'] = "Permissions des fichiers et dossiers";

$l['notice_process_long_time'] = "Cette opération peut prendre de quelques secondes à plusieurs heures selon la taille de votre base de données. <strong>Il est fortement recommandé de créer une sauvegarde de votre base de données car cette opération est irréversible.</strong>";
$l['notice_mb4_warning'] = "Le support de utf8mb4 nécessite MySQL 5.5.3 ou une version supérieure. Vous ne pourrez pas importer votre base de données sur un serveur MySQL dont la version est incompatible.";

$l['check_templates'] = "Vérifier les templates";
$l['check_templates_desc'] = "Cette page vous permet de vérifier tous les templates installés afin de détecter d’éventuels problèmes de sécurité.";
$l['check_templates_title'] = "Recherche de problèmes de sécurité dans les templates";
$l['check_templates_info'] = "Cette opération va vérifier vos templates afin de détecter d’éventuels problèmes de sécurité pouvant affecter votre forum ou votre serveur.<br />Cela peut prendre un certain temps si vous avez installé de nombreux thèmes.";
$l['check_templates_info_desc'] = "L’analyse des templates ci-dessous a rapporté des problèmes de sécurité connus. Veuillez les examiner.";
$l['full_edit'] = "Édition complète";

$l['error_chmod'] = "des fichiers et dossiers n’ont pas les permissions requises.";
$l['error_invalid_table'] = "La table spécifiée n’existe pas.";
$l['error_db_encoding_not_set'] = "Votre installation de MyBB n’est pas configurée pour utiliser cet outil. Veuillez consulter les <a href=\"https://docs.mybb.com/1.8/administration/utf-8-setup/\">docs MyBB</a> pour plus d’informations sur la configuration.";
$l['error_not_supported'] = "Votre moteur de base de données n’est pas pris en charge par l’outil de conversion UTF-8.";
$l['error_invalid_input'] = "Un problème est survenu lors de la vérification des templates. Veuillez réessayer ou utiliser les canaux de support pour obtenir de l’aide.";
$l['error_master_templates_altered'] = "Les modèles principaux ont été modifiés. Veuillez utiliser les canaux de support pour savoir comment les modifier correctement.";
$l['error_utf8mb4_version'] = "Votre version de MySQL ne prend pas en charge l’encodage utf8mb4.";

$l['warning_multiple_encodings'] = "Il est recommandé de ne pas utiliser plusieurs encodages dans votre base de données. Cela pourrait provoquer des comportements inattendus ou des erreurs.";
$l['warning_utf8mb4_config'] = "Pour bénéficier du support complet de utf8mb4, vous devez modifier <em>\$config['database']['encoding'] = 'utf8';</em> en <em>\$config['database']['encoding'] = 'utf8mb4';</em> dans le fichier inc/config.php.";

$l['success_templates_checked'] = "Vérification des templates terminée. Aucun problème de sécurité n’a été détecté !";

$l['success_all_tables_already_converted'] = "Toutes les tables ont déjà été converties ou sont déjà au format UTF-8.";
$l['success_table_converted'] = "La table « {1} » a bien été convertie vers UTF-8.";

$l['success_chmod'] = "Tous les fichiers et dossiers ont les permissions requises.";
