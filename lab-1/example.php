<?php

require_once 'Logger.php';
require_once 'Notifier.php';
require_once 'Project.php';
require_once 'Task.php';
require_once 'User.php';

$logger = new Logger();

$defaultNotifier = new SMSNotifier();
$addUserNotifier = new EmailNotifier();

$admin = new User($defaultNotifier);
$firstUser = new User($defaultNotifier);
$secondUser = new User($defaultNotifier);

$project = new Project($addUserNotifier, $admin);
$project->addUser($firstUser);
$project->addUser($secondUser);

$task = new Task($logger);
$firstUser->addTask($task);
$task->updateStatus($firstUser, 'NEW_STATUS');
