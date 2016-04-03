# identifier

PHP ID abstraction bundle

[![Build Status](https://travis-ci.org/kaihempel/identifier.svg?branch=master)](https://travis-ci.org/kaihempel/identifier)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/kaihempel/identifier/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/kaihempel/identifier/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/kaihempel/identifier/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/kaihempel/identifier/?branch=master)

For easy ID handling inside other projects.

Installing *Identifier* via Composer.

```json
   "require": {
     "kaihempel/identifier": "1.0.*"
   }
```

Using the identifier object instead simple integer variables.

```php
   $id = new Identifier(1);
   if($id->is(1)) // true
   if($id->is(2)) // false
```

Use type hinting on method or function signatures to avoid a huge number of numeric checks.

```php
   ...
   public function load(Identifier $id)
   {
   ...
   }
   ...
```
