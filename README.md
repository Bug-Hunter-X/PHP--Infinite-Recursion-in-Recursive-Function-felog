# PHP Infinite Recursion Bug

This repository demonstrates a common error in PHP: infinite recursion caused by a flawed base case in a recursive function.  The `bug.php` file contains the problematic code, while `bugSolution.php` provides a corrected version.

The bug arises from calling the recursive function with negative numbers and missing a condition to handle this edge case in a recursive function. This leads to an infinite chain of recursive calls resulting in a stack overflow error.

The solution adds proper base case handling, preventing the infinite recursion and ensuring the function terminates correctly for all input values.