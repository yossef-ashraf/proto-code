**File Name:** `century_from_year.php`

**Task Description:**

The first century spans from the year 1 up to and including the year 100, the second century from the year 101 up to and including the year 200, etc. Given a year, return the century it is in.

**Example:**

```php
Input:  1705
Output: 18

Input:  1900
Output: 19

Input:  1601
Output: 17

Input:  2000
Output: 20
```

**Requirements:**

- Calculate the century corresponding to any given positive integer year.
- Use ceiling division (`ceil($year / 100)`).
- Achieve **O(1)** time complexity and **O(1)** space complexity.
