COMPOSE=docker-compose
install:
	cp env-example .env
	$(COMPOSE) up -d --build mysql nginx
	$(COMPOSE) exec --user=laradock workspace make install

install-dev:
	cp env-example .env
	$(COMPOSE) up -d --build mysql nginx
	$(COMPOSE) exec --user=laradock workspace make install-dev

bash:
	$(COMPOSE) exec --user=laradock workspace bash

up:
	$(COMPOSE) up -d mysql nginx

down:
	$(COMPOSE) down

rebuild:
	$(COMPOSE) up -d --build mysql nginx

start:
	$(COMPOSE) start

stop:
	$(COMPOSE) stop
