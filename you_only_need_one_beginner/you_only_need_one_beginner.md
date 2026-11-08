**File Name:** `you_only_need_one_beginner.php`

**Task Description:**

You will be given an array `a` and a value `x`. Check whether the provided array contains the value. Array can contain numbers or strings. Return `true` if the array contains the value, `false` if not.

**Example:**

```php
Input:  a = [66, 101], x = 66
Output: true

Input:  a = [78, 117, 110, 99, 104, 117, 107, 115], x = 8
Output: false

Input:  a = ["t", "e", "s", "t"], x = "e"
Output: true
```

**Requirements:**

- Check whether `x` is present in array `a`.
- Use PHP's built-in `in_array()` function.
- Achieve **O(n)** time complexity where `n` is array length, and **O(1)** extra space complexity.
