**File Name:** `jennys_secret_message.php`

**Task Description:**

Jenny has written a function that returns a greeting for a user. However, she's in love with Johnny, and would like to greet him slightly differently. She added a special case to her function, but made a mistake. Fix it so that it returns `"Hello, my love!"` if the name is `"Johnny"`, and `"Hello, {name}!"` for anyone else.

**Example:**

```php
Input:  "James"
Output: "Hello, James!"

Input:  "Johnny"
Output: "Hello, my love!"
```

**Requirements:**

- Check if the name equals `"Johnny"`.
- Return `"Hello, my love!"` for Johnny.
- Return `"Hello, " . $name . "!"` for all other names.
- Achieve **O(1)** time complexity and **O(1)** space complexity.
