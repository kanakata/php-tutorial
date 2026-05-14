<?php
$start = microtime(true);

// code to run.
//example of a hello world program.
echo "hello world". PHP_EOL;

$stop = microtime(true);

echo $time = "Execution time is: " . number_format((($stop - $start) * 1000), 5, ".", ",") . "ms";