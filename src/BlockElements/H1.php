<?php

namespace BlockElements;

use Elements\BlockElement;

class H1 extends BlockElement
{
    public function __construct($data)
    {
        parent::__construct($data);
    }

    protected function __toString()
    {
        return get_class(__CLASS__);
    }
}
