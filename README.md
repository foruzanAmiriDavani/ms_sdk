## News Microservice SDK

#### How to install

```bash
composer require foruzan/ms-sdk
```

###### Register the Service Provider in bootstrap/app.php for <code>Lumen</code>:

```php
$app->register(News\App\Providers\NewsSdkServiceProvider::class);
```

###### Publish configuration files:

```bash
php artisan vendor:publish --tag=ms-sdk
```
