# Magento 1 CSS Merge Data URI Fix

This module fixes a bug which is present in all Magento 1 versions which case a corrupt CSS file when Magento's default CSS merging functionality is activated and data URI's are used in the CSS, for example with inline images.

## Why doesn't Magento fix this?

It's a known issue but probably they focus more on Magento 2, understandable.

## Known modules with this issue:

- [Algolia Search for Magento](https://github.com/algolia/algoliasearch-magento), a pull request is created: https://github.com/algolia/algoliasearch-magento/issues/739

## Installation

* Use [modman](https://github.com/colinmollenhour/modman): `modman clone https://github.com/just-better/magento1-css-merge-data-uri-fix.git`
* Manually: [download](https://github.com/just-better/magento1-css-merge-data-uri-fix/archive/master.zip), unzip and copy.

## Compability
This module overrides just one Magento model and is compatible with [our cache buster module](https://github.com/just-better/magento1-cache-buster) which overrides the same model. It's tested on Magento 1.9.3.1 but should work on every older version.

## Ideas, bugs or suggestions?
Please create a [issue](https://github.com/just-better/magento1-css-merge-data-uri-fix/issues) or a [pull request](https://github.com/just-better/magento1-css-merge-data-uri-fix/pulls).

## License
[MIT](LICENSE.txt)

---

[![JustBetter](https://justbetter.nl/app/uploads/2016/01/logo_justbetter_black-2x-new.png)](https://justbetter.nl)