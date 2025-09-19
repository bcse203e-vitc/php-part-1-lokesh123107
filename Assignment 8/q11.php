<?php
$array1 = array(array(77, 87), array(23, 45));
$array2 = array("w3resource", "com");
$result = array();
foreach ($array1 as $k => $v) {
    array_unshift($v, $array2[$k]);
    $result[] = $v;
}
print_r($result);
?>

