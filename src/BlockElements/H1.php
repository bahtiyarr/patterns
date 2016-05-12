<?php

namespace BlockElements;

use Elements\BlockElement;

class H1 extends BlockElement
{
    public function __toString()
    {
        return '<h1>' . parent::__toString() . '</h1>';
    }
}
