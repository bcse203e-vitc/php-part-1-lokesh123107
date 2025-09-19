<?php
$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
$lower = array_map('strtolower', $Color);
print_r($lower);
$upper = array_map('strtoupper', $Color);
print_r($upper);
?>

