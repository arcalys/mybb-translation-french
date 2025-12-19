<?php
/**
 * MyBB 1.9 French Language Pack
 * Traduction française pour MyBB 1.9
 * Copyright 2014 MyBB Group, All Rights Reserved
 *
 */

$l['task_manager'] = "Gestion des tâches planifiées";
$l['add_new_task'] = "Ajouter une tâche";
$l['add_new_task_desc'] = "Cette tâche vous permet de créer une nouvelle tâche planifiée qui s’exécutera automatiquement sur votre forum.";
$l['edit_task'] = "Modifier une tâche";
$l['edit_task_desc'] = "Cette page vous permet de modifier les paramètres d’une tâche planifiée.";
$l['task_logs'] = "Journal des tâches planifiées";
$l['view_task_logs'] = "Consulter le journal";
$l['view_task_logs_desc'] = "Cette page vous permet de consulter le journal des tâches planifiées. Lorsque la journalisation est activée, les résultats et erreurs des tâches sont reprises ci-dessous. Les entrées de plus de 30 jours sont automatiquement supprimées.";
$l['scheduled_tasks'] = "Tâches planifiées";
$l['scheduled_tasks_desc'] = "Cette page vous permet de gérer les différentes tâches planifiées sur votre forum.";

$l['title'] = "Titre";
$l['short_description'] = "Brève description";
$l['task_file'] = "Fichier de tâche";
$l['task_file_desc'] = "Sélectionnez le fichier que cette tâche doit exécuter.";
$l['time_minutes'] = "Planification : minutes";
$l['time_minutes_desc'] = "Saisissez une liste de minutes séparées par des virgules (0–59) auxquelles cette tâche doit s’exécuter. Saisissez « * » si cette tâche doit s’exécuter toutes les minutes.";
$l['time_hours'] = "Planification : heures";
$l['time_hours_desc'] = "Saisissez une liste d’heures séparées par des virgules (0–23) auxquelles cette tâche doit s’exécuter. Saisissez « * » si cette tâche doit s’exécuter toutes les heures.";
$l['time_days_of_month'] = "Planification : jours du mois";
$l['time_days_of_month_desc'] = "Saisissez une liste de jours séparés par des virgules (1–31) auxquels cette tâche doit s’exécuter. Saisissez « * » si cette tâche doit s’exécuter chaque jour ou si vous souhaitez préciser un jour de la semaine ci-dessous.";
$l['every_weekday'] = "Tous les jours de la semaine";
$l['sunday'] = "Dimanche";
$l['monday'] = "Lundi";
$l['tuesday'] = "Mardi";
$l['wednesday'] = "Mercredi";
$l['thursday'] = "Jeudi";
$l['friday'] = "Vendredi";
$l['saturday'] = "Samedi";
$l['time_weekdays'] = "Planification : jours de la semaine";
$l['time_weekdays_desc'] = "Sélectionnez les jours de la semaine pendant lesquels cette tâche doit s’exécuter. Maintenez « CTRL » pour en sélectionner plusieurs. Choisissez « Tous les jours de la semaine » si vous souhaitez que cette tâche s’exécute chaque jour de la semaine.";
$l['every_month'] = "Tous les mois";
$l['time_months'] = "Planification : mois";
$l['time_months_desc'] = "Sélectionnez les mois pendant lesquels cette tâche doit s’exécuter. Maintenez « CTRL » pour en sélectionner plusieurs. Choisissez « Tous les mois » si vous souhaitez que cette tâche s’exécute chaque mois.";
$l['enabled'] = "Activer la tâche ?";
$l['enable_logging'] = "Activer la journalisation des exécutions ?";
$l['save_task'] = "Enregistrer";
$l['task'] = "Tâche";
$l['date'] = "Date";
$l['data'] = "Données";
$l['no_task_logs'] = "Il n’y a actuellement aucune entrée de journal pour les tâches planifiées.";
$l['next_run'] = "Prochaine exécution";
$l['run_task_now'] = "Exécuter la tâche maintenant";
$l['disable_task'] = "Désactiver la tâche";
$l['run_task'] = "Exécuter la tâche";
$l['enable_task'] = "Activer la tâche";
$l['delete_task'] = "Supprimer la tâche";

$l['error_invalid_task'] = "La tâche spécifiée est invalide ou n’existe pas.";
$l['error_missing_title'] = "Veuillez saisir un titre pour cette tâche.";
$l['error_missing_description'] = "Veuillez saisir une description pour cette tâche.";
$l['error_invalid_task_file'] = "Le fichier sélectionné est invalide.";
$l['error_invalid_minute'] = "Veuillez saisir une minute valide.";
$l['error_invalid_hour'] = "Veuillez saisir une heure valide.";
$l['error_invalid_day'] = "Veuillez saisir un jour valide.";
$l['error_invalid_weekday'] = "Veuillez saisir un jour de la semaine valide.";
$l['error_invalid_month'] = "Veuillez saisir un mois valide.";

$l['success_task_created'] = "La tâche a bien été créée.";
$l['success_task_updated'] = "La tâche sélectionnée a bien été mise à jour.";
$l['success_task_deleted'] = "La tâche sélectionnée a bien été supprimée.";
$l['success_task_enabled'] = "La tâche sélectionnée a bien été activée.";
$l['success_task_disabled'] = "La tâche sélectionnée a bien été désactivée.";
$l['success_task_run'] = "La tâche sélectionnée a bien été exécutée.";

$l['confirm_task_deletion'] = "Êtes-vous sûr de vouloir supprimer cette tâche planifiée ?";
$l['confirm_task_enable'] = "<strong>AVERTISSEMENT :</strong> Vous êtes sur le point d’activer une tâche conçue pour être exécutée uniquement via cron. (Veuillez consulter la <a href=\"https://docs.mybb.com/1.8/administration/task-manager\" target=\"_blank\" rel=\"noopener\">documentation officielle</a> pour plus d’informations.) Continuer ?";
$l['no_tasks'] = "Il n’y a actuellement aucune tâche planifiée sur votre forum.";

# Existing tasks translations
$l['task_backupdb_title'] = "Sauvegarde hebdomadaire";
$l['task_backupdb_description'] = "Sauvegarde automatiquement la base de données dans le répertoire de sauvegarde. Cette tâche s’exécute toutes les semaines.";
$l['task_checktables_title'] = "Vérification des tables";
$l['task_checktables_description'] = "Exécute automatiquement une vérification des tables et tente de réparer celles qui sont corrompues. Cette tâche s’exécute toutes les heures.";
$l['task_dailycleanup_title'] = "Nettoyage quotidien";
$l['task_dailycleanup_description'] = "Supprime les anciennes sessions et les sujets lus. Cette tâche s’exécute tous les jours.";
$l['task_delayedmoderation_title'] = "Modération différée";
$l['task_delayedmoderation_description'] = "Effectue automatiquement les actions de modération différée. Cette tâche s’exécute tous les jours.";
$l['task_hourlycleanup_title'] = "Nettoyage horaire";
$l['task_hourlycleanup_description'] = "Supprime les anciennes recherches, les images de captcha, les questions d’inscription et les redirections expirées. Cette tâche s’exécute toutes les heures.";
$l['task_logcleanup_title'] = "Nettoyage des journaux";
$l['task_logcleanup_description'] = "Nettoie automatiquement les anciens journaux (administration, modération, tâches, promotions et courriels). Cette tâche s’exécute tous les jours.";
$l['task_massmail_title'] = "Traitement des courriels groupés";
$l['task_massmail_description'] = "Envoie automatiquement les courriels groupés en attente. Cette tâche s’exécute toutes les quinze minutes.";
$l['task_promotions_title'] = "Promotions des utilisateurs";
$l['task_promotions_description'] = "Exécute automatiquement le système de promotion de groupe. Cette tâche s’exécute toutes les vingt minutes.";
$l['task_recachestylesheets_title'] = "Régénération des feuilles de style";
$l['task_recachestylesheets_description'] = "Régénère toutes les feuilles de style sur le système de fichiers et les minifie. Cette tâche s’exécute une fois par an.";
$l['task_sendmailqueue_title'] = "Traitement des courriels";
$l['task_sendmailqueue_description'] = "Traite la file d’attente des courriels. Cette tâche s’exécute toutes les minutes.";
$l['task_threadviews_title'] = "Mise à jour des vues des sujets";
$l['task_threadviews_description'] = "Met automatiquement à jour le nombre de vues des sujets. Cette tâche sera automatiquement activée ou désactivée lors de la modification du paramètre « Vues différées des sujets ». Cette tâche s’exécute toutes les quinze minutes.";
$l['task_usercleanup_title'] = "Nettoyage des utilisateurs";
$l['task_usercleanup_description'] = "Expire automatiquement les bannissements, les avertissements, les suspensions et les périodes de modération des utilisateurs. Cette tâche s’exécute toutes les demi-heures.";
$l['task_userpruning_title'] = "Purge des utilisateurs";
$l['task_userpruning_description'] = "Supprime automatiquement les utilisateurs selon les critères définis dans les paramètres du forum. Cette tâche s’exécute tous les jours.";
$l['task_versioncheck_title'] = "Vérification de la version";
$l['task_versioncheck_description'] = "Recherche automatiquement les dernières annonces et nouvelles versions de MyBB. Cette tâche s’exécute tous les jours.";
