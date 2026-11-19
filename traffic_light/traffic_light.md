**File Name:** `traffic_light.php`

**Task Description:**

You're writing code to control your town's traffic lights. You need a function to handle each change from green, to yellow, to red, and then to green again. Complete the function that takes a string as an argument representing the current state of the light and returns a string representing the state the light should change to.

**Example:**

```php
Input:  "green"
Output: "yellow"

Input:  "yellow"
Output: "red"

Input:  "red"
Output: "green"
```

**Requirements:**

- Return next traffic light state.
- Handle green -> yellow, yellow -> red, red -> green.
- Achieve **O(1)** time complexity and **O(1)** space complexity.
