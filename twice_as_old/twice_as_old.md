**File Name:** `twice_as_old.php`

**Task Description:**

Your function takes two arguments: current father's age (years) and current age of his son (years). Calculate how many years ago the father was twice as old as his son (or in how many years he will be twice as old).

**Example:**

```php
Input:  fatherAge = 36, sonAge = 7
Output: 22 // 36 - 2 * 7 = 22

Input:  fatherAge = 55, sonAge = 30
Output: 5  // |55 - 60| = 5

Input:  fatherAge = 42, sonAge = 21
Output: 0
```

**Requirements:**

- Calculate `abs($fatherAge - 2 * $sonAge)`.
- Return integer.
- Achieve **O(1)** time complexity and **O(1)** space complexity.
