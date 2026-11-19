**File Name:** `collatz_conjecture_3n_plus_1.php`

**Task Description:**

The Collatz conjecture (also known as 3n+1 conjecture) is a conjecture that applying the following algorithm to any positive integer will always eventually result in the number 1:
- If n is even: n = n / 2
- If n is odd: n = 3 * n + 1

Your task is to make a function `hotpo` that takes a positive integer n and returns the number of times you need to perform this algorithm to reach 1.

**Example:**

```php
Input:  1
Output: 0

Input:  5
Output: 5 // 5 -> 16 -> 8 -> 4 -> 2 -> 1 (5 steps)

Input:  6
Output: 8 // 6 -> 3 -> 10 -> 5 -> 16 -> 8 -> 4 -> 2 -> 1 (8 steps)
```

**Requirements:**

- Apply Collatz step until reaching 1.
- Count the total number of steps.
- Achieve **O(steps)** time complexity and **O(1)** space complexity.
