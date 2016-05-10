<?php

namespace InlineElements;

use Elements\InlineElement;

class Strong extends InlineElement
{
    protected function __toString()
    {
        return get_class(__CLASS__);
    }
}
