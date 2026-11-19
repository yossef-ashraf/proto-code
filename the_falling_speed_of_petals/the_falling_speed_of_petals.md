**File Name:** `the_falling_speed_of_petals.php`

**Task Description:**

When it's spring Japanese cherry blossoms fall at an average speed of 5 centimeters per second (5 cm/s). A cherry blossom petal takes about 80 seconds to fall from a tree to the ground (total distance = 400 cm).

Write a function that receives the speed (cm/s) of a petal and returns the time it takes for that petal to reach the ground from the same branch. If the initial speed is <= 0, return 0.

**Example:**

```php
Input:  5
Output: 80 // 400 / 5 = 80

Input:  10
Output: 40 // 400 / 10 = 40

Input:  -1
Output: 0
```

**Requirements:**

- Return 0 if speed is <= 0.
- Divide 400 by speed.
- Achieve **O(1)** time complexity and **O(1)** space complexity.
