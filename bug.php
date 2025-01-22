This code suffers from a potential infinite recursion issue if the `$recursiveFunction` is called with an argument that doesn't meet the base case condition.  This can lead to a stack overflow error, crashing the script.

```php
function recursiveFunction($n) {
  if ($n <= 0) {
    return 0; // Base case
  } else {
    return $n + recursiveFunction($n - 1); // Recursive call
  }
}

$result = recursiveFunction(5); // Works fine
echo "Result: " . $result; // Outputs 15

$result2 = recursiveFunction(-5); //Infinite Recursion
echo "Result 2: " . $result2; //Stack Overflow
```