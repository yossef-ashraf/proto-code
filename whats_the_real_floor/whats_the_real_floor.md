**File Name:** `whats_the_real_floor.php`

**Task Description:**

Americans count the first floor as the ground floor, and there is no 13th floor due to superstition. Basements (negative floors) remain the same. Write a function that given a floor in the American system returns the floor in the European/real system.

**Example:**

```php
Input:  1
Output: 0

Input:  0
Output: 0

Input:  5
Output: 4

Input:  15
Output: 13

Input:  -3
Output: -3
```

**Requirements:**

- If the floor is 0 or negative, return the floor as is.
- If the floor is between 1 and 12, subtract 1.
- If the floor is 14 or above, subtract 2 (skipping 13 and ground).
- Achieve **O(1)** time complexity and **O(1)** space complexity.
