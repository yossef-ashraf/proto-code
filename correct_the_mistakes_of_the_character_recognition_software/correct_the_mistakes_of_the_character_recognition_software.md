**File Name:** `correct_the_mistakes_of_the_character_recognition_software.php`

**Task Description:**

Character recognition software often makes mistakes when digitizing text. Your task is to correct the errors in the digitized text:
- `'5'` is misinterpreted as `'S'`
- `'0'` is misinterpreted as `'O'`
- `'1'` is misinterpreted as `'I'`

**Example:**

```php
Input:  "L0ND0N"
Output: "LONDON"

Input:  "DUBL1N"
Output: "DUBLIN"

Input:  "51NGAP0RE"
Output: "SINGAPORE"
```

**Requirements:**

- Replace all occurrences of `'5'` with `'S'`.
- Replace all occurrences of `'0'` with `'O'`.
- Replace all occurrences of `'1'` with `'I'`.
- Achieve **O(n)** time complexity where `n` is string length, and **O(n)** space complexity.
