**File Name:** `is_he_gonna_survive.php`

**Task Description:**

A hero is on his way to the castle to complete his mission. The castle is surrounded by dragons, and each dragon takes 2 bullets to be defeated. Given the number of bullets the hero carries and the number of dragons he has to fight, return `true` if he will survive, and `false` otherwise.

**Example:**

```php
Input:  bullets = 10, dragons = 5
Output: true // 10 >= 5 * 2

Input:  bullets = 7, dragons = 4
Output: false // 7 < 4 * 2
```

**Requirements:**

- Check if `bullets >= dragons * 2`.
- Return a boolean (`true` or `false`).
- Achieve **O(1)** time complexity and **O(1)** space complexity.
