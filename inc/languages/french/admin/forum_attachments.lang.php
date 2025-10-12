<?php
/**
 * MyBB 1.9 French Language Pack
 * Traduction française pour MyBB 1.9
 * Copyright 2014 MyBB Group, All Rights Reserved
 *
 */

// Tabs
$l['attachments'] = "Pièces jointes";
$l['stats'] = "Statistiques des pièces jointes";
$l['find_attachments'] = "Rechercher des pièces jointes";
$l['find_attachments_desc'] = "Cette page vous permet de rechercher des pièces jointes. Vous pouvez rechercher des fichiers spécifiques que les utilisateurs ont ajoutés sur votre forum. Commencez par saisir des mots-clés ci-dessous. Tous les champs sont optionnels et ne seront pris en compte que s’ils contiennent une valeur.";
$l['find_orphans'] = "Rechercher des pièces jointes orphelines";
$l['find_orphans_desc'] = "Cette page vous permet de rechercher les pièces jointes orphelines sur votre forum. Il s’agit de pièces jointes qui, pour une raison quelconque, sont absentes de la base de données ou du système de fichiers. Cet outil vous aidera à les localiser et à les supprimer.";
$l['attachment_stats'] = "Statistiques des pièces jointes";
$l['attachment_stats_desc'] = "Cette page vous permet de consulter les statistiques des pièces jointes actuellement enregistrées sur votre forum.";

// Errors
$l['error_nothing_selected'] = "Veuillez sélectionner une ou plusieurs pièces jointes à supprimer.";
$l['error_no_attachments'] = "Il n’y a actuellement aucune pièce jointe sur votre forum.";
$l['error_not_all_removed'] = "Seules certaines pièces jointes orphelines ont été supprimées, d’autres n’ont pas pu être retirées du répertoire de téléchargement.";
$l['error_count'] = "Impossible de supprimer {1} pièce(s) jointe(s).";
$l['error_invalid_username'] = "Le nom d’utilisateur saisi est invalide.";
$l['error_invalid_forums'] = "Un ou plusieurs forums sélectionnés sont invalides.";
$l['error_no_results'] = "Aucune pièce jointe n’a été trouvée avec les critères de recherche spécifiés.";
$l['error_not_found'] = "Le fichier joint n’a pas pu être trouvé dans le répertoire de téléchargement.";
$l['error_not_attached'] = "La pièce jointe a été téléchargée il y a plus de 24 heures mais n’est pas attachée à un message.";
$l['error_does_not_exist'] = "Le sujet ou le message correspondant à cette pièce jointe n’existe plus.";

// Success
$l['success_deleted'] = "Les pièces jointes sélectionnées ont bien été supprimées.";
$l['success_orphan_deleted'] = "Les pièces jointes orphelines sélectionnées ont bien été supprimées.";
$l['success_count'] = '{1} pièce(s) jointe(s) supprimée(s) avec succès.';
$l['success_no_orphans'] = "Il n’y a aucune pièce jointe orpheline sur votre forum.";

// Confirm
$l['confirm_delete'] = "Êtes-vous sûr de vouloir supprimer les pièces jointes sélectionnées ?";

// == Pages
// = Stats
$l['general_stats'] = "Statistiques générales";
$l['stats_attachment_stats'] = "Statistiques des pièces jointes";
$l['num_uploaded'] = "<strong>Nombre de pièces jointes téléchargées</strong>";
$l['space_used'] = "<strong>Espace utilisé par les pièces jointes</strong>";
$l['bandwidth_used'] = "<strong>Estimation de la bande passante utilisée</strong>";
$l['average_size'] = "<strong>Taille moyenne des pièces jointes</strong>";
$l['size'] = "Taille";
$l['posted_by'] = "Publié par";
$l['thread'] = "Sujet";
$l['downloads'] = "Téléchargements";
$l['date_uploaded'] = "Date de téléchargement";
$l['popular_attachments'] = "Top 5 des pièces jointes les plus populaires";
$l['largest_attachments'] = "Top 5 des plus grandes pièces jointes";
$l['users_diskspace'] = "Top 5 des utilisateurs occupant le plus d’espace disque";
$l['username'] = "Nom d’utilisateur";
$l['total_size'] = "Taille totale";

// = Orphans
$l['orphan_results'] = "Rechercher des pièces jointes orphelines - Résultats";
$l['orphan_attachments_search'] = "Rechercher des pièces jointes orphelines";
$l['reason_orphaned'] = "Raison";
$l['reason_not_in_table'] = "Non présente dans la table des pièces jointes";
$l['reason_file_missing'] = "Fichier joint manquant";
$l['reason_thread_deleted'] = "Sujet supprimé";
$l['reason_post_never_made'] = "Message jamais créé";
$l['unknown'] = "Inconnu";
$l['results'] = "Résultats";
$l['step1'] = "Étape 1";
$l['step2'] = "Étape 2";
$l['step1of2'] = "Étape 1 sur 2 - Analyse du système de fichiers";
$l['step2of2'] = "Étape 2 sur 2 - Analyse de la base de données";
$l['step1of2_line1'] = "Veuillez patienter, le système de fichiers est en cours d’analyse afin de détecter les pièces jointes orphelines.";
$l['step2of2_line1'] = "Veuillez patienter, la base de données est en cours d’analyse afin de détecter les pièces jointes orphelines.";
$l['step_line2'] = "Vous serez automatiquement redirigé vers l’étape suivante une fois ce processus terminé.";
$l['scanning'] = 'Analyse en cours…';

// = Attachments / Index
$l['index_find_attachments'] = "Rechercher des pièces jointes";
$l['find_where'] = "Rechercher des pièces jointes…";
$l['name_contains'] = "Le nom du fichier contient";
$l['name_contains_desc'] = "Recherchez les pièces jointes dont le nom contient la chaîne indiquée. Par exemple, saisissez .zip pour trouver les fichiers avec l’extension .zip.";
$l['type_contains'] = "Le type de fichier contient";
$l['forum_is'] = "Forum";
$l['username_is'] = "Nom d’utilisateur de l’auteur";
$l['poster_is'] = "L’auteur est";
$l['poster_is_either'] = "Un utilisateur enregistré ou un invité";
$l['poster_is_user'] = "Un utilisateur enregistré";
$l['poster_is_guest'] = "Un invité";
$l['more_than'] = "Plus de";
$l['greater_than'] = "Plus de";
$l['is_exactly'] = "Égal à";
$l['less_than'] = "Moins de";
$l['date_posted_is'] = "Ajouté il y a";
$l['days_ago'] = "jour(s)";
$l['file_size_is'] = "Taille du fichier";
$l['kb'] = "KiB";
$l['download_count_is'] = "Nombre de téléchargements";
$l['display_options'] = "Options d’affichage";
$l['filename'] = "Nom du fichier";
$l['filesize'] = "Taille du fichier";
$l['download_count'] = "Nombre de téléchargements";
$l['post_username'] = "Nom de l’auteur du message";
$l['asc'] = "Croissant";
$l['desc'] = "Décroissant";
$l['sort_results_by'] = "Trier les résultats par";
$l['results_per_page'] = "Résultats par page";
$l['in'] = "dans";

// Buttons
$l['button_delete_orphans'] = "Supprimer les pièces jointes orphelines sélectionnées";
$l['button_delete_attachments'] = "Supprimer les pièces jointes sélectionnées";
$l['button_find_attachments'] = "Rechercher des pièces jointes";
