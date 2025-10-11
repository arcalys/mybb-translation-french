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
