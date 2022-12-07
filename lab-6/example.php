<?php

require_once 'Downloader.php';

$simpleDownloader = new SimpleDownloader();
$simpleDownloader->download('example.jpg');

$cachedDownloader = new CachedDownloader();
$cachedDownloader->download('example.jpg');
$cachedDownloader->download('example.jpg');
