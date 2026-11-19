**File Name:** `grasshopper_terminal_game_combat_function.php`

**Task Description:**

Create a combat function that takes the player's current health and the amount of damage received, and returns the player's new health. Health can't be less than 0.

**Example:**

```php
Input:  health = 100, damage = 5
Output: 95

Input:  health = 20, damage = 30
Output: 0
```

**Requirements:**

- Subtract damage from health.
- Clamp minimum result to 0.
- Achieve **O(1)** time complexity and **O(1)** space complexity.
