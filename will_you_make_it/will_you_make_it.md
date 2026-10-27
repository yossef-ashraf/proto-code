**File Name:** `will_you_make_it.php`

**Task Description:**

You were camping with your friends and now it's time to go back. You have to travel a certain distance to the nearest pump, your car runs at a given miles per gallon (`mpg`), and you have `fuelLeft` gallons remaining. Return `true` if you can reach the pump, and `false` otherwise.

**Example:**

```php
Input:  distance = 50, mpg = 25, fuelLeft = 2
Output: true // 25 * 2 = 50 >= 50

Input:  distance = 100, mpg = 50, fuelLeft = 1
Output: false // 50 * 1 = 50 < 100
```

**Requirements:**

- Check if `mpg * fuelLeft >= distance`.
- Return boolean `true` or `false`.
- Achieve **O(1)** time complexity and **O(1)** space complexity.
