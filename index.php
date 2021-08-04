<?php

require_once 'vendor/autoload.php';

$report = new \App\S\Report();
$template = new \App\S\HtmlTemplate();
$template->render($report->getReport());
