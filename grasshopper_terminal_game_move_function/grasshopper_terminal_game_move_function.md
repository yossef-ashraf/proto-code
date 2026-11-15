**File Name:** `grasshopper_terminal_game_move_function.php`

**Task Description:**

In this game, the hero moves from left to right. The player rolls the dice and moves twice the number of spaces indicated by the dice. Create a function for the terminal game that takes the current position of the hero and the roll (1-6) and returns the new position.

**Example:**

```php
Input:  position = 3, roll = 6
Output: 15 // 3 + (6 * 2) = 15

Input:  position = 0, roll = 4
Output: 8  // 0 + (4 * 2) = 8
```

**Requirements:**

- Calculate the new position: `position + roll * 2`.
- Achieve **O(1)** time complexity and **O(1)** space complexity.
