**File Name:** `what_is_between.php`

**Task Description:**

Complete the function that takes two integers (`a`, `b`, where `a < b`) and return an array of all integers between the input parameters, including them.

**Example:**

```php
Input:  a = 1, b = 4
Output: [1, 2, 3, 4]

Input:  a = -2, b = 2
Output: [-2, -1, 0, 1, 2]
```

**Requirements:**

- Generate all numbers from `a` up to `b` inclusive.
- Use PHP's built-in `range()` function.
- Achieve **O(b - a)** time complexity and **O(b - a)** space complexity.
