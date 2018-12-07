# Magento 1 CSS Merge Data URI Fix

This module fixes a bug which is present in all Magento 1 versions which case a corrupt CSS file when Magento's default CSS merging functionality is activated and data URI's are used in the CSS, for example with inline images. For more information see: http://magento.stackexchange.com/questions/14973/problem-with-data-uris-and-css-file-merge

## Why doesn't Magento fix this?

It's a known issue but probably they focus more on Magento 2, understandable.

## Installation

* Use [modman](https://github.com/colinmollenhour/modman): `modman clone https://github.com/justbetter/magento1-css-merge-data-uri-fix.git`
* Manually: [download](https://github.com/justbetter/magento1-css-merge-data-uri-fix/archive/master.zip), unzip and copy.

## Compability
This module overrides just one Magento model and is compatible with [our cache buster module](https://github.com/justbetter/magento1-cache-buster) which overrides the same model. It's tested on Magento 1.9.3.7 but should work on every older version.

## Ideas, bugs or suggestions?
Please create a [issue](https://github.com/justbetter/magento1-css-merge-data-uri-fix/issues) or a [pull request](https://github.com/justbetter/magento1-css-merge-data-uri-fix/pulls).

## License
[MIT](LICENSE.txt)

## About us
We’re a innovative development agency from The Netherlands building awesome websites, webshops and web applications with Laravel and Magento. Check out our website [justbetter.nl](https://justbetter.nl) and our [open source projects](https://github.com/justbetter).

---

<a href="https://justbetter.nl" title="JustBetter"><img src="https://raw.githubusercontent.com/justbetter/art/master/justbetter-logo.png" width="200px" alt="JustBetter logo"></a>
