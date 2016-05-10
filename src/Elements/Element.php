<?php

namespace Elements;

abstract class Element
{
    abstract public function __construct($data);
    abstract protected function __toString();
}
