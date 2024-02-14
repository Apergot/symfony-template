start-dev:
	docker-compose --env-file docker/docker-env.local up -d

shell-dev:
	docker exec -it sf-template-local-api-php bash

stop:
	docker-compose down -v --remove-orphans