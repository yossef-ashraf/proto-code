**File Name:** `all_star_code_challenge_18.php`

**Task Description:**

Create a function that accepts a string and a single character, and returns an integer representing the count of occurrences the character is found in the string. If no occurrences are found, return 0.

**Example:**

```php
Input:  str = "Hello", letter = "o"
Output: 1

Input:  str = "Hello", letter = "l"
Output: 2

Input:  str = "", letter = "z"
Output: 0
```

**Requirements:**

- Count occurrences of a specific character in a string.
- Use `substr_count()`.
- Achieve **O(n)** time complexity where `n` is string length, and **O(1)** space complexity.
