# Unexpected Foreach Behavior with PHP Associative Arrays and References

This repository demonstrates an uncommon bug in PHP related to how foreach loops handle references with associative arrays.  The issue arises when attempting to modify the values of an associative array using a reference within a foreach loop.  The expected behavior (incrementing values) does not occur.

The `bug.php` file contains the code demonstrating the issue. The `bugSolution.php` file offers a solution.  This is a subtle bug that can be easily missed.

## Bug Description

When using references (&) within foreach loops to modify values in PHP associative arrays, the modifications are not reflected in the original array.  This is different from the behavior observed with numeric arrays or multi-dimensional numeric arrays.

## Solution

The solution involves iterating over the keys of the associative array and accessing the values directly using the key.