<?php

require "vendor/autoload.php";

$loop = \React\EventLoop\Factory::create();

$loop->addTimer(1, function () {
    echo "Loop started \n";
});

echo "After Loop Starts \n";

$loop->run();
