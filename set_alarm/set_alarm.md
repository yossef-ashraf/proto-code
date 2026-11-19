**File Name:** `set_alarm.php`

**Task Description:**

Write a function named `setAlarm` which receives two parameters: `employed` and `vacation`. The function should return `true` if you are employed and not on vacation (because these are the circumstances under which you need to set an alarm). It should return `false` otherwise.

**Example:**

```php
Input:  employed = true, vacation = true
Output: false

Input:  employed = true, vacation = false
Output: true

Input:  employed = false, vacation = false
Output: false
```

**Requirements:**

- Check condition `$employed && !$vacation`.
- Return boolean `true` or `false`.
- Achieve **O(1)** time complexity and **O(1)** space complexity.
