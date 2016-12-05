# Descriptive statistics
Very very basic statistical operations with PHP

## Installation
```bash
composer require rraspo/descriptive-statistics
```

## Usage

```php
use EstDesc\EstDesc;
class SomeClass {
  function someFunction {
      ...
      $median = EstDesc::median($data);
      ...
  }
}
```
