# MediaWiki Extension HideVariousTabsFromUnauthorizedUsers

Disables various view tabs (and originally also namespace tabs) from users without `edit` permission for Vector skin.

This extension is based on a features discussed on [this topic page](https://www.mediawiki.org/wiki/Topic:Qji4lqoeaodggoft) on May 28, 2012.

## Install

To install this extension, add the following to LocalSettings.php.

```PHP
wfLoadExtension("HideVariousTabsFromUnauthorizedUsers");
```

### Optional settings

- `$wgHVTFUUviewsToRemove`
  - Tabs of view to remove.
  - default: `['project_talk', 'talk', 'viewsource', 'history']`

## License

This software is licensed under the [GNU General Public License 2.0 or later](COPYING).

## Authors

- [Yoshihiro Okumura](https://github.com/orrisroot)
- [Tim 'SVG' Weyer](https://www.mediawiki.org/wiki/User:SVG) (Original Author)

