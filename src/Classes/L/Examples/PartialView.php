<?php


namespace App\L\Examples;


use Exception;

class PartialView extends AbstractView
{
    /**
     * @param AbstractView $view
     * @throws Exception
     */
    public function addView(AbstractView $view): void
    {
        throw new Exception('Add view error');
    }

    /**
     * @param array $views
     * @throws Exception
     */
    public function addViews(array $views): void
    {
        throw new Exception('Add views error');
    }

    public function render(): void
    {
        $this->_render();
    }
}