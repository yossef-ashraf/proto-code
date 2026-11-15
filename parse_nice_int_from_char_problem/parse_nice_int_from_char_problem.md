**File Name:** `parse_nice_int_from_char_problem.php`

**Task Description:**

You ask a small child, "How old are you?" The child always responds with `"x years old"`, where `x` is a number between 0 and 9. Write a program that returns the age (0-9) as an integer. The first character in the string is always a number.

**Example:**

```php
Input:  "4 years old"
Output: 4

Input:  "5 years old"
Output: 5

Input:  "9 years old"
Output: 9
```

**Requirements:**

- Extract the first character of the string and parse it as an integer.
- Return an integer between 0 and 9.
- Achieve **O(1)** time complexity and **O(1)** space complexity.
