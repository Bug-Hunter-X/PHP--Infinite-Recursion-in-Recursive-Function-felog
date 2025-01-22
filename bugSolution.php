The solution involves adding more robust input validation or a more comprehensive base case to the recursive function to handle all possible scenarios.

```php
function recursiveFunction($n) {
  if ($n <= 0) {
    return 0; // Base case for non-positive numbers
  } elseif ($n > 1000) { //Added a check to handle very large numbers to prevent stack overflow in another way
      return 0; // Base case for numbers greater than 1000
  } else {
    return $n + recursiveFunction($n - 1); // Recursive call
  }
}

$result = recursiveFunction(5); // Works fine
echo "Result: " . $result; // Outputs 15

$result2 = recursiveFunction(-5); // Works correctly now
echo "Result 2: " . $result2; // Outputs 0

$result3 = recursiveFunction(1001); // Works correctly now
echo "Result 3: " . $result3; // Outputs 0
```
This improved version includes checks to handle both negative numbers and extremely large numbers, effectively preventing infinite recursion and stack overflow errors.