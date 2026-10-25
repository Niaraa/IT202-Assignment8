
<!DOCTYPE html>
<html>
<head>
    <title>PHP Array Assignment</title>
</head>
<body>

<h2>PHP Array Results</h2>

<?php

$values = $_POST["values"];

function showArray($title, $arr) {
    echo "<h3>$title</h3>";

    echo "Without keys:<br>";
    foreach ($arr as $value) {
        echo htmlspecialchars($value) . "<br>";
    }

    echo "<br>With keys:<br>";
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}

// 1. Original array
showArray("Original Array", $values);

// 2. Delete two elements
unset($values[1]);
unset($values[3]);
showArray("Array After 2 Elements Deleted", $values);

// 3. Remove gaps from array
$values = array_values($values);
showArray("Array After Gaps Removed", $values);

// 4. Sort in ascending order
sort($values);
showArray("Array Sorted Ascending", $values);

// 5. Sort in descending order
rsort($values);
showArray("Array Sorted Descending", $values);

// 6. Sort by value and keep keys
asort($values);
showArray("Array Sorted Ascending With Keys", $values);

// 7. Sort by keys
ksort($values);
showArray("Array Sorted by Keys", $values);

?>

<br>
<a href="index.html">Go Back</a>

</body>
</html>
