<?php


namespace App\S;


class Report
{
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
        return $this->getDoctor() . '-' . $this->getPatient() . '-' . $this->getData();
    }
}