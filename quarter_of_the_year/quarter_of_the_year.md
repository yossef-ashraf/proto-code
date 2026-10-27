**File Name:** `quarter_of_the_year.php`

**Task Description:**

Given a month as an integer from 1 to 12, return to which quarter of the year it belongs as an integer number.

**Example:**

```php
Input:  2
Output: 1 // February is in Quarter 1

Input:  6
Output: 2 // June is in Quarter 2

Input:  11
Output: 4 // November is in Quarter 4
```

**Requirements:**

- Each quarter consists of 3 months.
- Divide month by 3 and round up using `ceil()`.
- Achieve **O(1)** time complexity and **O(1)** space complexity.
