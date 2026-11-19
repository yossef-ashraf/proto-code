**File Name:** `dna_to_rna_conversion.php`

**Task Description:**

Deoxyribonucleic acid, DNA is the primary information storage molecule in biological systems. Ribonucleic acid, RNA, is the primary messenger molecule in cells. RNA differs slightly from DNA its chemical structure and contains no Thymine. In RNA Thymine is replaced by another nucleic acid Uracil ('U').

Create a function which translates a given DNA string into RNA (replace 'T' with 'U').

**Example:**

```php
Input:  "GCAT"
Output: "GCAU"

Input:  "TTTT"
Output: "UUUU"
```

**Requirements:**

- Replace every `'T'` with `'U'`.
- Use `str_replace("T", "U", $dna)`.
- Achieve **O(n)** time complexity.
