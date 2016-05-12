<?php

namespace Renderer;

use Elements\Element;

class HtmlRenderer extends Renderer
{
    public function render(Element $element)
    {
        return $element->__toString();
    }
}
