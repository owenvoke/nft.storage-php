# Content API

[Back to the navigation](README.md)

Allows interacting with the Content API.

### Get a list of all files

```php
$response = $client->contents()->all();
```

### Get details about a file

```php
$response = $client->contents()->show('bafkreidivzimqfqtoqxkrpge6bjyhlvxqs3rhe73owtmdulaxr5do5in7u');
```

### Check whether a file has been pinned by its content id

```php
$response = $client->contents()->status('bafkreidivzimqfqtoqxkrpge6bjyhlvxqs3rhe73owtmdulaxr5do5in7u');
```

### Remove a file from being pinned

```php
$response = $client->contents()->remove('bafkreidivzimqfqtoqxkrpge6bjyhlvxqs3rhe73owtmdulaxr5do5in7u');
```
