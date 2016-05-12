<?php

namespace Renderer;

use Elements\Element;

class TextRenderer extends Renderer
{
    public function render(Element $element)
    {
        return strip_tags($element->__toString());
    }
}
