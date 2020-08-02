# household-account-book-api

「おおまか家計簿」API リポジトリ

## Laravel コマンド

### マイグレーション

php artisan migrate

### マイグレーション 直前をロールバック

php artisan migrate:rollback

### マイグレーション 全てをロールバック

php artisan migrate:reset

## docker コマンド

### docker 立ち上げ

docker-compose up -d

### docker リスタート

docker-compose restart

### docker 停止

docker-compose stop

### docker のコンテナを停止

docker-compose down -v

### build して立ち上げる

docker-compose up -d --build

### app コンテナにログイン

docker-compose exec app bash

## mysql へのログイン方法(docker 上で実行)

docker exec -it 「コンテナ ID」 mysql -u root -p

※mysql の「コンテナ ID」 は下記コマンドを実行して確認

docker ps
