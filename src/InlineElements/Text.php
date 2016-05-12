<?php

namespace InlineElements;

use Elements\FlexElement;

class Text extends FlexElement
{
    /**
     * @var string
     */
    private $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    public function __toString()
    {
        return $this->text;
    }
}
