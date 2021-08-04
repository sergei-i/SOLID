<?php


namespace App\O;


class ReportRepository
{
    private Report $report;

    private ISaver $saver;

    public function __construct(Report $report, ISaver $saver)
    {
        $this->report = $report;
        $this->saver = $saver;
    }

    public function save(): void
    {
        $this->saver->save($this->report->getReport());
    }
}