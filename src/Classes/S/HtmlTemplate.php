<?php


namespace App\S;


class HtmlTemplate implements ITemplate
{
    public function render(string $data): void
    {
        echo '<p>' . $data . '</p>';
    }
}