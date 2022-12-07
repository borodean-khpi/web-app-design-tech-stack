<?php

require_once 'Client.php';
require_once 'Poster.php';

$facebookPoster = new FacebookPoster('NoobMaster69', 'jelly22fi$h');
$facebookPoster->post('Hello Facebook!');

$linkedInPoster = new LinkedInPoster('john.doe@example.com', 'jelly22fi$h');
$linkedInPoster->post('Hello LinkedIn!');
