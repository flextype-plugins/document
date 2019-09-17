# Document Plugin for [Flextype](http://flextype.org/)
![version](https://img.shields.io/badge/version-1.4.0-brightgreen.svg?style=flat-square)
![Flextype](https://img.shields.io/badge/Flextype-0.9.4-green.svg?style=flat-square)
![MIT License](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)

Document plugin allows you to embed various types of documents using Google Document Viewer.

## Installation
Unzip plugin to the folder `/site/plugins/`

## Usage in page content

Display document
```
[document url="https://www.gnu.org/licenses/gpl-3.0.rtf"]
```

## Usage in the template

```html
{{ document('https://www.gnu.org/licenses/gpl-3.0.rtf') }}
```

## Settings

enabled: true or false to disable the plugin

```yaml
enabled: true
```

## LICENSE
[The MIT License (MIT)](https://github.com/flextype-plugins/sitemap/blob/master/LICENSE) Copyright (c) 2018-2019 [Sergey Romanenko](https://github.com/Awilum)
