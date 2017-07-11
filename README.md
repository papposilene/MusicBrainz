# MusicBrainz API Client
This project contains an easy to use PHP API client for the [MusicBrainz JSON web service](https://musicbrainz.org/doc/Development/JSON_Web_Service).
 
## Contents
- [Status](#status)
- [Installation](#installation)
    - [Install with Git](#install-with-git)
    - [Install with Composer](#install-with-composer)
    
## Status
This software is still in development and not yet ready for use in production.

## Installation
### Install with Git
```bash
git clone https://github.com/XenosEleatikos/MusicBrainz.git
```

### Install with Composer
This project is available at [Packagist](https://packagist.org): https://packagist.org/packages/xenos/musicbrainz
You can install it with the following command:
```bash
composer require xenos/musicbrainz
```

## Usage

### Set up
The task of this API client is to create requests to MusicBrainz web service and provide its responses as PHP objects.
It does not perform other tasks and it is not dependent of software performing other tasks. But for using it in your
project, you need other software: You _must_ have an HTTP client and you _may_ have a logger. If you already have an
HTTP client and a logger in you project, use them, otherwise you may take any other.
As an HTTP client is necessary to the the MusicBrainz API client, you have to provide it as constructor argument. You
may use any HTTP client by using an adapter instantiating ```MusicBrainz\AbstractHttpAdapter```. This projects delivers
an adapter for [Guzzle 6](http://docs.guzzlephp.org/en/stable/), but you may write your own adapter for your preferred
HTTP client.
Usage with Guzzle:

```php
<?php
$musicBrainz = new \MusicBrainz\MusicBrainz(
    new MusicBrainz\HttpAdapter\GuzzleHttpAdapter(
        new GuzzleHttp\Client()
        )
    );
```

Optionally, you may set any logger implementing [```Psr\Log\LoggerInterface```](http://www.php-fig.org/psr/psr-3/).
If you use a logger not implementing it, you may write an adapter.
Usage with Monolog:

```php
<?php
$musicBrainz->setLogger(new Monolog\Logger('MusicBrainz API Client Logger'));
```
