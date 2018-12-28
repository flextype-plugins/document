# Document Plugin for [Flextype](http://flextype.org/)
![version](https://img.shields.io/badge/version-1.1.0-brightgreen.svg?style=flat-square)
![Flextype](https://img.shields.io/badge/Flextype-0.8.0-green.svg?style=flat-square)
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

Define Flextype namespace in the template if it is not defined yet.
```
<?php namespace Flextype; ?>
```

Display document
```
<?php echo document('https://www.gnu.org/licenses/gpl-3.0.rtf'); ?>
```

## Settings

```yaml
enabled: true # or `false` to disable the plugin
```

## License
See [LICENSE](https://github.com/flextype-plugins/document/blob/master/LICENSE)
