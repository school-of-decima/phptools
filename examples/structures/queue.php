<?php

require __DIR__ . "/../../vendor/autoload.php";

$queue = newQueue("main");

$queue->add("A", "B", "C");

while ($queue->len() > 0) {
    $item = $queue->consume();
    echo $item . "\n";
    echo $queue . "\n";
}