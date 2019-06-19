<?php
$https_site = "https://hacksg.com";
header("Location: {$https_site}"); # should be redirect to http://hacksg.com not https:// 
exit;
