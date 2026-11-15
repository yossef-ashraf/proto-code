**File Name:** `sum_of_differences_in_array.php`

**Task Description:**

Your task is to sum the differences between consecutive pairs in the array in descending order. If the array is empty or contains only a single element, return 0.

**Example:**

```php
Input:  [2, 1, 10]
Output: 9 // Descending: [10, 2, 1] -> (10 - 2) + (2 - 1) = 8 + 1 = 9

Input:  [-3, -2, -1]
Output: 2 // Descending: [-1, -2, -3] -> (-1 - -2) + (-2 - -3) = 1 + 1 = 2

Input:  [1]
Output: 0
```

**Requirements:**

- Return 0 if the array has 0 or 1 element.
- Sum differences of consecutive elements in descending order (or calculate `max($arr) - min($arr)`).
- Achieve **O(n)** time complexity and **O(1)** space complexity.
