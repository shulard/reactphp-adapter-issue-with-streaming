# Sample repository to reproduce an issue with `php-http/react-adapter` and streams.

## How to test ?

Using Composer:

```bash
composer install
```

Launch a server web at port 8000 to serve the public folder which contains the
sample 10Mb file:

```bash
php -S 0.0.0.0:8000 -t public
```

Then launch the `sample.php` file:

```bash
php sample.php
```

You'll get an output like this one:

```
Fatal error: Allowed memory size of 5242880 bytes exhausted (tried to allocate 1118208 bytes) in /app/vendor/react/promise-stream/src/functions.php on line 61
```
