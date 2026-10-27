**File Name:** `keep_hydrated.php`

**Task Description:**

Nathan loves cycling. Because Nathan knows it is important to stay hydrated, he drinks 0.5 litres of water per hour of cycling. Given the time in hours, calculate the number of litres Nathan will drink, rounded to the smallest value (`floor`).

**Example:**

```php
Input:  time = 3
Output: 1

Input:  time = 6.7
Output: 3

Input:  time = 11.8
Output: 5
```

**Requirements:**

- Multiply time by 0.5.
- Round down to the nearest integer using `floor()`.
- Achieve **O(1)** time complexity and **O(1)** space complexity.
