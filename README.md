# laravel-markdown

Laravel 5.6 + parsedown + highlightjs

* composer
    * Laravel 5.6
        * `$ composer create-project laravel/laravel --prefer-dist`
    * [parsedown](https://packagist.org/packages/erusev/parsedown)
        * `$ composer require erusev/parsedown`
* npm
    * [highlightjs](https://www.npmjs.com/package/highlightjs)
        * `npm i highlightjs --save-dev`

## Install
```shell
$ git clone https://github.com/Eotones/laravel-markdown.git
$ cd laravel-markdown
$ composer install
$ npm install
#
$ copy .env.example .env
# Open .env change database name and password
$ php artisan key:generate
$ php artisan migrate
$ php artisan serve
# Go to localhost:8000
```

## Build SCSS and JS

```shell
$ npm run dev
```
