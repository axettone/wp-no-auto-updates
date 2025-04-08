# wp-no-auto-updates
A must-use wordpress plugin to block all updates

## Usage
Just copy the ```no-auoto-update.php``` file in ```/wp-content/mu-plugins```.

Also add the following code to wp-config.php


```php
define( 'AUTOMATIC_UPDATER_DISABLED', true );
define( 'WP_AUTO_UPDATE_CORE', false );
/* That's all, stop editing! Happy publishing. */
```
