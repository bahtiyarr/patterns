<?php

namespace Renderer;

use Elements\Element;

abstract class Renderer
{
    abstract public function render(Element $element);
}
