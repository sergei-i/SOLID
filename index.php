<?php

require_once 'vendor/autoload.php';

//$report = new \App\S\Report();
//$template = new \App\S\HtmlTemplate();
//$template->render($report->getReport());

$report = new \App\O\Report();
//$saver = new \App\O\FileSave('file.txt');
$saver = new \App\O\DataBaseSave('127.0.0.1', 'root', 'root', 'solid');
$repository = new \App\O\ReportRepository($report, $saver);
$repository->save();