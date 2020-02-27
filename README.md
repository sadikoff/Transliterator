Transliterator [![Build Status](https://travis-ci.org/sadikoff/transliterator.svg)](http://travis-ci.org/sadikoff/transliterator)
==============

Transliterator is a PHP library for text transliteration.

Transliteration is a subset of the science of hermeneutics. It is a form of translation, and is the practice of converting a text from one script into another.

Instalation
-----------

This library is available on [Packagist](http://packagist.org/packages/artemiso/transliterator).
The recommended way to install it is through [Composer](http://getcomposer.org):

```bash
$ composer require koff/transliterator
```

Then include Composer’s autoloader:

```php
require_once 'vendor/autoload.php';
```

Basic Usage
-----------

### Native example

```php
use Koff\Transliterator\Transliterator;
use Koff\Transliterator\Mapping\Lang;

// Initialize transliteration class
$ts = new Transliterator(Lang\RU\Scholarly::class);
echo $ts->toTranslit('Русский');                              // 'Russkij'

// Load another mapping
$ts->useMapping(Lang\SR\Scholarly::class);
echo $ts->toTrasnlit('Ниш');                                  // 'Niš'

// Temporary override mapping
echo $ts->toTrasnlit('Транслитерация', Lang\RU\Scholarly::class);   // 'Transliteracija'
```

### Symfony example:

TODO!

Languages and Transliteration Systems Supported
-----------------------------------------------

- [Russian](http://en.wikipedia.org/wiki/Romanization_of_Russian)
    * ISO R 9 1968
    * GOST 1971 (GOST 16876-71 table 2)
    * GOST 1983
    * GOST 2000 (GOST 7.79-2000, system B; ISO (1995))
    * GOST 2002
    * ALA LC
    * British Standard
    * BGN PCGN
    * Passport 1997
    * Passport 2010
- [Serbian](http://en.wikipedia.org/wiki/Serbian_Cyrillic_alphabet)
- [Macedonian](http://en.wikipedia.org/wiki/Romanization_of_Macedonian)
    * ISO 9 1995
    * BGN PCGN
    * ISO 9 R 1968 National Academy
    * ISO 9 R 1968 b
- [Belarusian](http://en.wikipedia.org/wiki/Romanization_of_Belarusian)
    * ALA LC
    * BGN PCGN
    * ISO 9
    * National 2000
- [Ukrainian](http://en.wikipedia.org/wiki/Romanization_of_Ukrainian)
    * ALA LC
    * British
    * BGN PCGN
    * ISO 9
    * National
    * GOST 1971
    * GOST 1986
    * Derzhstandart 1995
    * Passport 2004
    * Passport 2007
    * Passport 2010
- [Greek](http://en.wikipedia.org/wiki/Romanization_of_Greek)
- [Bulgarian](http://en.wikipedia.org/wiki/Romanization_of_Bulgarian)
