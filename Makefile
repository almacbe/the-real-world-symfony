.PHONY: install serve migrate seed test cs stan postman

install:
	composer install

serve:
	php -S 127.0.0.1:8000 -t public

migrate:
	APP_ENV=dev bin/console doctrine:migrations:migrate --no-interaction

seed:
	APP_ENV=dev bin/console app:seed

test:
	composer test

cs:
	composer cs

stan:
	composer stan

postman:
	composer postman
