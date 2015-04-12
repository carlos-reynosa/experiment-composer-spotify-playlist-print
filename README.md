#About

Composer project to test creating and using a composer package.

#Example Use

```php
$printer = new SpotifyPlaylistPrint('436a7dc3226047b39c097fb3bd8c1886','97e4536b48e6402d9182a5a4251acdd0');

$printer->printList('raveash','1LnGfWZxpGpKqKeThyYLfT');

var_dump($printer->getPlaylistList('raveash','1LnGfWZxpGpKqKeThyYLfT'));
```
