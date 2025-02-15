```php
<?php
function increment_array_values(&$arr) {
  foreach ($arr as $key => &$value) {
    $value++;
  }
}

$arr4 = ['a' => 1, 'b' => 2, 'c' => 3];
increment_array_values($arr4);
print_r($arr4); // Output: Array ( [a] => 2 [b] => 3 [c] => 4 )

// Now the values are correctly incremented.
?>
```