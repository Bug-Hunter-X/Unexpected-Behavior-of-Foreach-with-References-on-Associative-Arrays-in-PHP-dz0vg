```php
<?php
function increment_array_values(&$arr) {
  foreach ($arr as &$value) {
    $value++;
  }
}

$arr = [1, 2, 3];
increment_array_values($arr);
print_r($arr); // Output: Array ( [0] => 2 [1] => 3 [2] => 4 )

// This works as expected

$arr2 = [[1,2],[3,4]];
increment_array_values($arr2);
print_r($arr2); // Output: Array ( [0] => Array ( [0] => 2 [1] => 3 ) [1] => Array ( [0] => 4 [1] => 5 ) )

//This also works as expected

$arr3 = [1, [2,3]];
increment_array_values($arr3);
print_r($arr3); //Output: Array ( [0] => 2 [1] => Array ( [0] => 3 [1] => 4 ) )

//This is unexpected behavior

$arr4 = ['a' => 1, 'b' => 2, 'c' => 3];
increment_array_values($arr4);
print_r($arr4); // Output: Array ( [a] => 1 [b] => 2 [c] => 3 )

//The values should be incremented, but they aren't.
?>
```