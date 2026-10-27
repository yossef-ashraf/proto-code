**File Name:** `counting_sheep.php`

**Task Description:**

Consider an array of sheep where some sheep may be missing from their place. We need a function that counts the number of sheep present in the array (`true` means present).

**Example:**

```php
Input:  [true, true, true, false, true, true, true, true, true, false, true, false, true, false, false, true, true, true, true, true, false, false, true, true]
Output: 17
```

**Requirements:**

- Count occurrences of `true` values in the array.
- Ignore `false`, `null`, or undefined values.
- Achieve **O(n)** time complexity and **O(1)** space complexity.
