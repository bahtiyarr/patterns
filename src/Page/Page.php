<?php

namespace Page;

use Elements\Element;
use Renderer\Renderer;

class Page
{

    private $element;
    private $renderer;

    public function __construct(Element $element, Renderer $renderer)
    {
        $this->element = $element;
        $this->renderer = $renderer;
    }

    public function render()
    {
        return $this->renderer->render($this->element);
    }
}
