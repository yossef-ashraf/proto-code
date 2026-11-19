**File Name:** `how_good_are_you_really.php`

**Task Description:**

There was a test in your class and you passed it. Congratulations! But you're an ambitious person. You want to know if you're better than the average student in your class.

You receive an array with your peers' test scores. Now calculate the average and compare your score! Return `true` if you're better, else `false`!

**Example:**

```php
Input:  classPoints = [2, 3], yourPoints = 5
Output: true // average = 2.5, 5 > 2.5

Input:  classPoints = [100, 40, 34, 57, 29, 72, 57, 88], yourPoints = 75
Output: true
```

**Requirements:**

- Calculate average of class points.
- Compare `yourPoints > average`.
- Return boolean `true` or `false`.
- Achieve **O(n)** time complexity.
