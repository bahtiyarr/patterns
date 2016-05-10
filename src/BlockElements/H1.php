<?php

namespace BlockElements;

use Elements\BlockElement;

class H1 extends BlockElement
{
    protected function __toString()
    {
        return get_class(__CLASS__);
    }
}
