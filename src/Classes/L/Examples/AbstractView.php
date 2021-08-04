<?php


namespace App\L\Examples;


use Exception;

abstract class AbstractView
{
    public string $content;

    protected string $template;

    /**
     * AbstractView constructor.
     * @param string|null $template
     * @throws Exception
     */
    public function __construct(string $template = null)
    {
        if (!is_null($template)) {
            $this->setTemplate($template);
        }
    }

    /**
     * @param string $template
     * @throws Exception
     */
    public function setTemplate(string $template): void
    {
        $template = __DIR__ . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . $template;

        if (!file_exists($template)) {
            throw new Exception('Invalid template');
        }

        $this->template = $template;
    }

    public function getTemplate(): string
    {
        return $this->template;
    }

    protected function _render(): string
    {
        if ($this->template) {
            extract(['content' => $this->content]);
            ob_start();
            include($this->template);

            ob_get_clean();
        }

        return '';
    }

    abstract public function addView(AbstractView $view);

    abstract public function addViews(array $views);

    abstract public function render();
}