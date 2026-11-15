**File Name:** `the_feast_of_many_beasts.php`

**Task Description:**

All of the animals are having a feast! Each animal is bringing one dish. There is just one rule: the dish must start and end with the same letters as the animal's name. E.g. the great blue heron is bringing garlic naan and the chickadee is bringing chocolate cake. Write a function that takes the animal's name and dish as arguments and returns `true` or `false` to indicate whether the beast is allowed to bring the dish to the feast.

**Example:**

```php
Input:  beast = "great blue heron", dish = "garlic naan"
Output: true // starts with 'g', ends with 'n'

Input:  beast = "chickadee", dish = "chocolate cake"
Output: true // starts with 'c', ends with 'e'

Input:  beast = "brown bear", dish = "bear claw"
Output: false // 'b' == 'b' but 'r' != 'w'
```

**Requirements:**

- Check if first character of beast equals first character of dish.
- Check if last character of beast equals last character of dish.
- Return boolean `true` or `false`.
- Achieve **O(1)** time complexity and **O(1)** space complexity.
