**File Name:** `gravity_flip.php`

**Task Description:**

Bob is bored during his physics lessons so he's built himself a toy box to help pass the time. The box is special, since it has the ability to change gravity.

There are some columns of toy cubes in the box arranged in a line. The i-th column contains a_i cubes. At first, the gravity pulls the cubes down. When Bob switches the gravity to the right ('R'), all the cubes fall towards the right. When Bob switches to the left ('L'), all the cubes fall towards the left.

Given the initial configuration of the cubes in the box and the direction of gravity flip ('R' or 'L'), find how many cubes are in each of the n columns after the flip.

**Example:**

```php
Input:  dir = 'R', arr = [3, 2, 1, 2]
Output: [1, 2, 2, 3]

Input:  dir = 'L', arr = [1, 4, 5, 3, 5]
Output: [5, 5, 4, 3, 1]
```

**Requirements:**

- If direction is `'R'`, sort ascending.
- If direction is `'L'`, sort descending.
- Achieve **O(n log n)** time complexity.
