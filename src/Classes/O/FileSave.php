<?php


namespace App\O;


class FileSave implements ISaver
{
    private string $filePath;

    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }

    public function save(string $data): void
    {
        file_put_contents($this->filePath, $data);
    }
}