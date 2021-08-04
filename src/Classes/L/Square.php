<?php


namespace App\L;


class Square extends Rectangle
{
    public function setWidth(int $width): void
    {
        $this->height = $width;
        $this->width = $width;
    }

    public function setHeight(int $height): void
    {
        $this->height = $height;
        $this->width = $height;
    }
}