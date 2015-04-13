#About

Composer project to test creating and using a composer package.

Packagist page: https://packagist.org/packages/carlos-reynosa/experiment-composer-spotify-playlist-print

#Example Use

```php
$clientId='user_id';
$clientSecret='client_secret';

$userId='carlos-reynosa';
$playlistId='1234';

$printer = new SpotifyPlaylistPrint($clientId,$clientSecret);

$printer->printList($userId,$playlistId);
```
