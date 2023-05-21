### Создание индекса
```http request
PUT /book-shop
```
### Добавление нового документа в индекс
```
POST /book-shop/_doc            - присвоит id автоматически
POST /book-shop/create/<_id>    - требует указания уникального id
```
### Получение документа из индекса
```
GET /book-shop/_doc/<_id>       - возвращает исходный json + мета-данные
GET /book-shop/_source/<_id>    - возвращает исходный json
```
### Обновление документа в индексе
```http request
POST /book-shop/update/<_id>
Content-Type: application/json

{
    "doc": {
       "price": 2500
    }
}
```
### Удаление документа из индекса
```http request
DELETE /book-shop/_doc/<_id>
```
### Массовое добавление/изменение документов
```http request
POST /_bulk

{"create": {"_index": "book-shop", "_id": "342-001"}}
{ ...JSON... }
{"update": {"_index": "book-shop", "_id": "342-001"}}
{ ...JSON... }
{"delete": {"_index": "book-shop", "_id": "342-001"}}
```
```
curl \
    --location \
    --insecure \
    --request POST 'https://localhost:9200/_bulk' \
    --header 'Authorization: Basic ZDddfsewerdgw45d==' \
    --header 'Content-Type: application/json' \
    --data-binary "@bulk.json"
```
### Поиск: все результаты
```http request
GET /book-shop/_search

{
    "query": {
        "match_all": { }
    }
}
```