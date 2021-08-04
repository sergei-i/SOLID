<?php


namespace App\L\Examples;


class CompositeView extends AbstractView
{
    protected array $views = [];

    public function addView(AbstractView $view): void
    {
        $this->views[] = $view;
    }

    public function addViews(array $views): void
    {
        foreach ($views as $view) {
            $this->addView($view);
        }
    }

    public function render(): string
    {
        $output = '';

        if (!empty($this->views)) {
            foreach ($this->views as $view) {
                $output .= $view->render();
            }
        }

        $output .= $this->_render();

        return $output;
    }
}