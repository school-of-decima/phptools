<?php

require __DIR__ . "/../../vendor/autoload.php";

$queue = newStack("main");

$queue->push("A", "B", "C");

while ($queue->len() > 0) {
    $item = $queue->pop();
    echo $item . "\n";
    echo $queue . "\n";
}