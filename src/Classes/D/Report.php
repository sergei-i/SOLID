<?php


namespace App\D;


class Report implements IReport
{
    private View $view;

    public function __construct(View $view)
    {
        $this->view = $view;
    }

    public function getView(): View
    {
        return $this->view;
    }

    public function setView(View $view): void
    {
        $this->view = $view;
    }

    public function getDoctor(): string
    {
        return 'Doctor';
    }

    public function getPatient(): string
    {
        return 'Patient';
    }

    public function getData(): string
    {
        return 'Data';
    }

    public function getReport(): string
    {
        return $this->getView()->render($this->getDoctor(), $this->getPatient(), $this->getData());
    }
}