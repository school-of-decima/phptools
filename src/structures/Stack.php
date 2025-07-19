<?php

namespace SchoolOfDecima\PhpTools\structures;

use Exception;

class Stack extends NamedArrayContainer
{


    /**
     * This method adds items to the top of the stack.
     */
    public function push(...$items)
    {
        array_push($this->items, ...$items);
    }

    /**
     * @throws Exception
     * This method removes and returns the top item from the stack.
     */
    public function pop()
    {
        if (empty($this->items)) {
            throw new Exception('Stack is empty');
        }
        return array_pop($this->items);
    }


    protected function getDefaultName()
    {
        return "stack";
    }
}