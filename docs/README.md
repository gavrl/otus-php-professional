### Запуск проекта

```
docker compose build
dockker compose exec socket-chat-server composer install
dockker compose exec socket-chat-client composer install

docker compose exec socket-chat-server bash
    cd public && php app.php server
    
docker compose exec socket-chat-client bash
    cd public && php app.php client
```