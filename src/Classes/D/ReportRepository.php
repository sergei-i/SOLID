<?php


namespace App\D;


class ReportRepository
{
    private IReport $report;

    private ISaver $saver;

    public function __construct(IReport $report, ISaver $saver)
    {
        $this->report = $report;
        $this->saver = $saver;
    }

    public function save(): void
    {
        $this->saver->save($this->report->getReport());
    }
}