<?php

namespace Elements;

abstract class Element
{
    /**
     * @var Element[]
     */
    private $elements;

    /**
     * Element constructor.
     * @param Element[] $elements
     */
    public function __construct($elements)
    {
        $this->elements = $elements;
    }

    public function __toString()
    {
        return join('', $this->elements);
    }
}
