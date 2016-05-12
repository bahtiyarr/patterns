<?php

namespace Elements;

abstract class InlineElement extends FlexElement
{
    /**
     * @var FlexElement[]
     */
    private $elements;

    /**
     * InlineElement constructor.
     * @param FlexElement[] $elements
     */
    public function __construct(array $elements)
    {
        $this->elements = $elements;
    }

    public function __toString()
    {
        return ' ' . join(' ', $this->elements);
    }
}
