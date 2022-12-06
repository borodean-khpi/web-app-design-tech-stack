<?php

require_once "Client.php";
require_once "Poster.php";

$facebookConnection = new FacebookPoster('NoobMaster69', 'jelly22fi$h');
$facebookConnection->post('Hello Facebook!');

$linkedInConnection = new LinkedInPoster('john.doe@example.com', 'jelly22fi$h');
$linkedInConnection->post('Hello LinkedIn!');
