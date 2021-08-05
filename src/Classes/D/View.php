<?php


namespace App\D;


class View
{
    public function render(string $doctor, string $patient, string $data): string
    {
        return $doctor . '-' . $patient . '-' . $data;
    }
}