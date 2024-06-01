<?php

require "vendor/autoload.php";

$loop = \React\EventLoop\Factory::create();


$counter = 0;

/************************   function ()  use (&$loop, &$timer, &$counter) { */

$loop->addPeriodicTimer(1, function (\React\EventLoop\TimerInterface $timer)  use (&$loop,  &$counter) {

    $counter++;
    if ($counter === 5) {
        $loop->cancelTimer($timer);
    }

    echo "Hello World\n";
});

$loop->run();
