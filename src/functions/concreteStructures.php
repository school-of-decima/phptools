<?php

function newStack($name = null)
{
    return new \SchoolOfDecima\PhpTools\structures\Stack($name);
}

function newQueue($name = null)
{
    return new \SchoolOfDecima\PhpTools\structures\Queue($name);
}

function newStringFilledStack($name = null)
{
    $stack = newStack($name);
    $stack->push(...range("A", "Z"));
    return $stack;
}

function newStringFilledQueue($name = null)
{
    $queue = newQueue($name);
    $queue->add(...range("A", "Z"));
    return $queue;
}