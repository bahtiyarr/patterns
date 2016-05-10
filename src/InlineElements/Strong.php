<?php

namespace InlineElements;

use Elements\InlineElement;

class Strong extends InlineElement
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
