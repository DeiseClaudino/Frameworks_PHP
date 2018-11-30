up:
	docker-compose up -d

stopreplication:
	docker-compose exec dbslave bash -c "/desetup.sh"

startreplication:
	docker-compose exec dbslave bash -c "/resetup.sh"

checkreplication:
	docker-compose exec dbmaster mysql -umasteruser -pmasterpass \
		-e "SELECT * FROM performance_schema.replication_group_members;"

bash:
	docker-compose exec php bash

phpcs:
	docker-compose exec php ./vendor/bin/phpcs

phpcbf:
	docker-compose exec php ./vendor/bin/phpcbf

coverage:
	docker-compose exec php ./bin/phpunit --coverage-text
