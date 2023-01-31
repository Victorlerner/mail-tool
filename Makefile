up: rebuild composer-install migrate migrate-testing seed

rebuild:
	docker-compose -f docker-compose.yml up -d --build
migrate:
	docker exec -t  mail-tool-api-php php artisan migrate:fresh
migrate-testing:
	docker exec -t  mail-tool-api-php php artisan migrate:fresh --env=testing


seed:
	docker exec -t  mail-tool-api-php php artisan db:seed

run-tests:
	docker exec -t  mail-tool-api-php  php artisan test
run-tests-coverage:
	docker exec -t --env XDEBUG_MODE=coverage mail-tool-api-php php artisan test --coverage

composer-install:
	docker exec -t  mail-tool-api-php composer install
