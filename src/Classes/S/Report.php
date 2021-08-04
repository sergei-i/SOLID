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

    //Incorrectly
/*    public function save(): void
    {
        $fileName = 'Report-' . $this->getDoctor() . '-' . $this->getPatient() . '.txt';
        file_put_contents($fileName, $this->getReport());
    }

    public function export(){}*/
}