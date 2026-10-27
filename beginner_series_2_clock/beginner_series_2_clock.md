**File Name:** `beginner_series_2_clock.php`

**Task Description:**

Clock shows `h` hours, `m` minutes and `s` seconds after midnight. Your task is to write a function which returns the time since midnight in milliseconds.

**Example:**

```php
Input:  h = 0, m = 1, s = 1
Output: 61000 // (1 * 60 + 1) * 1000 = 61000 ms
```

**Requirements:**

- Convert hours to seconds (`h * 3600`).
- Convert minutes to seconds (`m * 60`).
- Add seconds and multiply total by 1000 to convert to milliseconds.
- Achieve **O(1)** time complexity and **O(1)** space complexity.
