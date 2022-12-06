<?php

require_once 'Notification.php';
require_once 'SlackClient.php';
require_once 'SMSClient.php';

$emailNotification = new EmailNotification('john.doe@example.com');
$emailNotification->send('Update', 'Howdy!');

$slackClient = new SlackClient('john.doe', '1337');
$slackNotification = new SlackNotification($slackClient, 'general');
$slackNotification->send('Update', 'Howdy!');

$smsNotification = new SMSNotification('+380 98 000-00-00', 'John Doe');
$smsNotification->send('Update', 'Howdy!');
