**File Name:** `is_the_string_uppercase.php`

**Task Description:**

Create a method to see whether the string is ALL CAPS. A string is considered all caps if it does not contain any lowercase letter.

**Example:**

```php
Input:  "c"
Output: false

Input:  "C"
Output: true

Input:  "hello I AM DONALD"
Output: false

Input:  "HELLO I AM DONALD"
Output: true
```

**Requirements:**

- Check if the string has no lowercase letters.
- Compare the string directly with its uppercase version (`$str === strtoupper($str)`).
- Achieve **O(n)** time complexity where `n` is string length, and **O(n)** space complexity.
