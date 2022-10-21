<?php

require_once 'Singleton.php';
require_once 'Storage.php';
require_once 'User.php';

$fs = FileSystemStorage::getInstance();
$s3 = S3Storage::getInstance();
$user = new User();

$user->connect($fs);
$user->connect($s3);
