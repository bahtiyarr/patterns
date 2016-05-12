<?php

namespace InlineElements;

use Elements\InlineElement;

class Strong extends InlineElement
{
    public function __toString()
    {
        return '<strong>' . parent::__toString() . '</strong>';
    }
}
