**File Name:** `best_time_to_buy_and_sell_stock.php`

**Task Description:**

You are given an array `prices` where `prices[i]` is the price of a given stock on the `i-th` day. You want to maximize your profit by choosing a single day to buy one stock and choosing a different day in the future to sell that stock. Return the maximum profit you can achieve from this transaction. If you cannot achieve any profit, return `0`.

**Example:**

```php
Input:  [7, 4, 6, 2, 5, 9, 3, 1]
Output: 7 // Buy on day 3 (price = 2) and sell on day 5 (price = 9), profit = 9 - 2 = 7
```

**Requirements:**

- Must buy before selling.
- Only one buy and one sell allowed.
- Achieve **O(n)** time complexity using a **One Pass** approach.
- Achieve **O(1)** extra space complexity.
