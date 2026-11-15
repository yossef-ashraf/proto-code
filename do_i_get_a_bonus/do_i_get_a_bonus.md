**File Name:** `do_i_get_a_bonus.php`

**Task Description:**

Build a function that takes two arguments: `salary` (integer) and `bonus` (boolean). If `bonus` is `true`, the salary should be multiplied by 10. If `bonus` is `false`, the salary remains the same. Return the total figure as a string prefixed with `$` (e.g., `"$10000"`).

**Example:**

```php
Input:  salary = 10000, bonus = true
Output: "$100000"

Input:  salary = 25000, bonus = false
Output: "$25000"

Input:  salary = 100, bonus = true
Output: "$1000"
```

**Requirements:**

- Multiply salary by 10 if bonus is `true`.
- Keep stated salary if bonus is `false`.
- Prefix the result with `"$"` and return as string.
- Achieve **O(1)** time complexity and **O(1)** space complexity.
