# Laravel Article

> **Branch 1.0:** _không sử dụng Access Control_

## Install

* **Thêm vào file composer.json của app**
```json
	"repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/datlv/laravel-article"
        }
    ],
    "require": {
        "datlv/laravel-article": "dev-master"
    }
```
``` bash
$ composer update
```

* **Thêm vào file config/app.php => 'providers'**
```php
	Datlv\Article\ServiceProvider::class,
```

* **Publish config và database migrations**
```bash
$ php artisan vendor:publish
$ php artisan migrate
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
