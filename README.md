# Gulp-PHP-AdminLTE（for Laravel 5.1）

* Gulp による お手軽 Laravel 開発環境の構築。

**主な機能**

* Laravel 5.1 クリーンインストール
* SASS（`.scss`）の コンパイル & 連結 & ミニファイ
* Javascript ファイルの連結 & ミニファイ
* 画像ファイル（`.png``.gif`,`.jpg`,`.svg`）の画像最適化
* PHP ビルトインサーバー
* オートリロード

## Install

```
$ git clone -b lara https://github.com/ontheroadjp/Gulp-PHP-AdminLTE.git
$ cd Gulp-PHP-AdminLTE
$ npm install
$ gulp
```

**Installed**

(Core)

* Laravel 5.1.11
* AdminLTE 2.3.2
* Bootstrap 3.3.5
* Font-Awesome 4.4.0
* JQuery 2.1.4

(Laravel Library)

* ontheroadjp/laravel-auth
* xinax/laravel-gettext

## Run

laravel ディレクトリに移動して`gulp` コマンドで PHP ビルトインサーバーが起動して`localhost:9999`でアクセス可能。

```
$ gulp
```

PHP ビルトインサーバーが起動している状態で`src/`以下のファイルを修正すると、自動的に`php artisan vendor:publish`が発行される。

## LICENCE

### Major components:

* Laravel: MIT License
* gulp: MIT License
* AdminLTE: MIT Licence
* jQuery: MIT/GPL License
* Bootstrap: MIT Licence
* Font-Awesome: SIL Open Font License
