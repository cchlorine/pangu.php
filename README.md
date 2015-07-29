pangu.php
===
Paranoid text spacing for good readability, to automatically insert whitespace between CJK (Chinese, Japanese, Korean) and half-width characters (alphabetical letters, numerical digits and symbols).

* Go version: [pangu.go](https://github.com/vinta/pangu)
* Java version: [pangu.java](https://github.com/vinta/pangu.java)
* JavaScript version: [pangu.js](https://github.com/vinta/paranoid-auto-spacing)
* Object-C version [pangu.obeject-c](https://github.com/Cee/pangu.objective-c)
* Node.js version: [pangu.node](https://github.com/huei90/pangu.node)
* Python version: [pangu.py](https://github.com/vinta/pangu.py)
* Ruby version: [pangu.rb](https://github.com/dlackty/pangu.rb)

## Instalation

Using composer
```
composer require kunr/pangu.php
```

Or manually

```
git clone https://github.com/Kunr/pangu.php.git
```

## Usage

Require `pangu.php`
```
require 'pangu.php';
echo pang('Jackie的鼻子有幾個？123個！'); // Jackie 的鼻子有幾個？123 個！
```

Or

Use `pangu-cli.php`
```
php pangu-cli.php "Jackie的鼻子有幾個？123個！" //// Jackie 的鼻子有幾個？123 個！
```

## License
Released under the MIT License.
