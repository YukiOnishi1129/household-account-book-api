# household-account-book-api

「おおまか家計簿」API リポジトリ

<img width="708" alt="スクリーンショット 2020-08-30 2 53 04" src="https://user-images.githubusercontent.com/58220747/91643226-47314400-ea6c-11ea-87d0-3e0ca5c8177d.png">

## Laravel 命名規則

https://qiita.com/gone0021/items/e248c8b0ed3a9e6dbdee

## Laravel コマンド

### マイグレーション

php artisan migrate

#### マイグレーション 直前をロールバック

php artisan migrate:rollback

#### マイグレーション 全てをロールバック

php artisan migrate:reset

#### マイグレーション テーブル全てをドロップしマイグレーションを際実行する

php artisan migrate:fresh

#### seeder 実行

php artisan db:seed
php artisan db:seed --class=シーダーファイル名

#### テーブルを再構築してシーダーを実行

php artisan migrate:fresh --seed

### ルートの確認

php artisan route:list

### コントローラー作成 (REST)

php artisan make:controller 「コントローラー名」 --resource

### モデル作成

php artisan make:model モデル名

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
