RedkingSonataExtendedBundle
=====================

This bundle extends Sonata Admin features or look

## Installation

Add bundle to composer.json

```js
{
    "require": {
        "redking/core-rest-bundle": "dev-master"
    },
    "repositories": [
        {
            "type": "vcs",
            "url":  "git@bitbucket.org:redkingteam/redkingsonataextendedbundle.git"
        }
    ]
}
```

Register the bundle

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Redking\Bundle\SonataExtendedBundle\RedkingSonataExtendedBundle(),

    );
}
```

## Configuration


### Define stylesheets in the project Configuration

```yaml
# app/config/config.yml
sonata_admin:
    assets:
        stylesheets:
            # ....
            - bundles/redkingsonataextended/css/override.css
```
