**File Name:** `abbreviate_a_two_word_name.php`

**Task Description:**

Write a function to convert a name into initials. This kata strictly takes two words with one space in between them. The output should be two capital letters with a dot separating them.

**Example:**

```php
Input:  "Sam Harris"
Output: "S.H"

Input:  "patrick feeney"
Output: "P.F"
```

**Requirements:**

- Split the string into two words by space.
- Take the first character of each word and convert it to uppercase.
- Join the initials with a dot (`.`).
- Achieve **O(n)** time complexity where `n` is string length, and **O(1)** extra space complexity.
