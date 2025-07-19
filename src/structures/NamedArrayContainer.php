<?php

namespace SchoolOfDecima\PhpTools\structures;

abstract class NamedArrayContainer
{
    protected $name;
    protected $items = [];

    protected abstract function getDefaultName();

    public function __construct($name = null)
    {
        $this->name = $this->getDefaultName();
        if ($name) {
            $this->name = $name;
        }
    }
    public function __toString()
    {
        return sprintf("%s: [%s]", $this->name, implode(", ", $this->items));
    }

    public function len(){
        return count($this->items);
    }

}