<?php

$max = 100000;

function exampleArray(int $from = 1, int $to = 100000): array
{
  $data = [];
  for ($i = $from; $i <= $to; $i++) {
    $data[] = $i;
  }
  return $data;
}


// take the start time to measure the execution time
$start = microtime(true);


foreach (exampleArray(1, $max) as $value) {
    // add timestamp to the output
    echo "Current value:  {$value} \n";
}

// take the end time to measure the execution time
$end = microtime(true);

// calculate the execution time
$execution_time = ($end - $start);

/////////////

function exampleGenerator(int $from = 1, int $to = 1000): Iterator {
    for ($i = $from; $i <= $to; $i++) {
      // Note that $i is preserved between yields.
      yield $i;
    }
  }
  
$start = microtime(true);

  foreach (exampleGenerator(1, $max) as $value) {
    echo "Current value: {$value}\n";
  }

$end = microtime(true);

$execution_time2 = ($end - $start);

echo "Execution time of script = {$execution_time} sec\n";
echo "Execution time of script = {$execution_time2} sec\n";