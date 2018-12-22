SHELL := /bin/sh

docker-start: ## start containers
docker-start:
	@docker-compose up --remove-orphans -d

docker-stop: ## stop containers
docker-stop:
	@docker-compose stop

docker-shell: ## Open a shell session on the PHP container
docker-shell:
	@docker exec -it phpstanerr_php /bin/sh
