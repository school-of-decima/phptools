<?php

namespace SchoolOfDecima\PhpTools\structures;

use Exception;

class Queue extends NamedArrayContainer
{


    protected function getDefaultName()
    {
        return "queue";
    }

    /**
     * This method adds items to the end of the queue.
     */
    public function add(...$items)
    {
        array_push($this->items, ...$items);
    }

    /**
     * @throws Exception
     * This method removes and returns the first item from the queue.
     */
    public function consume()
    {
        if (empty($this->items)) {
            throw new Exception('Queue is empty');
        }
        return array_shift($this->items);
    }

    /**
     * This method is an alias for consume()
     */
    public function enqueue(...$items)
    {
        $this->add(...$items);
    }

    /**
     * @throws Exception
     * This method is an alias for consume()
     */
    public function dequeue()
    {
        return $this->consume();
    }


}