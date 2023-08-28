## Laravel SSO Auth

Sample Laravel Auth app that implements oAuth2 with SSO.

## Getting Started

Create a file for your environment variables.
```sh
cp .env.docker.example .env
```
Create database `laravel_sso` and run
```sh
php artisan migrate
```
Configure laravel passport
```sh
php artisan passport:install --uuids
```
Create client app using laravel passport and input callback as `http://localhost:8080/callback`
```
php artisan passport:client
```
Install Dependencies
```sh
composer install
```
```sh
npm install
```
Run server
```sh
php artisan serve --port=8000
```
```sh
npm run build or npm run dev
```

## Reference
- [Build oAuth 2.0 SSO with PHP](https://www.youtube.com/playlist?list=PLC-R40l2hJfdyfZ3jkDKOcyoqmIgw2wda)

