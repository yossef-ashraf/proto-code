**File Name:** `price_of_mangoes.php`

**Task Description:**

There's a "3 for 2" (or "buy 2 get 1 free") offer on mangoes. For a given quantity and price (per mango), calculate the total cost.

**Example:**

```php
Input:  quantity = 2, price = 3
Output: 6 // 2 mangoes for $3 each = $6

Input:  quantity = 3, price = 3
Output: 6 // 3 mangoes for the price of 2 = $6

Input:  quantity = 9, price = 5
Output: 30 // 6 paid + 3 free: 6 * 5 = $30
```

**Requirements:**

- Every 3 mangoes purchased includes 1 free mango (`intdiv($quantity, 3)`).
- Multiply paid mangoes count by the price per mango.
- Achieve **O(1)** time complexity and **O(1)** space complexity.
