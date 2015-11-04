# Gulp-Laravel-AdminLTE

* Gulp + Bower + Composer による お手軽 Laravel 開発環境の構築。

**主な機能**

* Laravel 5.1 クリーンインストール
* gettext を利用した Laravel 多言語化パッケージのインストール
* JQuery 2.1.4 クリーンインストール（by Bower）
* Bootstrap  3.3.5（sass版） クリーンインストール（by Bower）
* AdminLTE 2.3.2 クリーンインストール（by Bower）
* Font-Awesome 4.4.0 クリーンインストール（by Bower）
* 上記ライブラリの・・・

	1. SASSファイルの コンパイル & 連結 & ミニファイ
	2. Javascript ファイルの連結 & ミニファイ
	3. 画像ファイル（`.png``.gif`,`.jpg`,`.svg`）のロスレス軽量化
	
	をした上で、Laravel の public ディレクトリへ保存

* ユーザー管理機能

	1. 新規ユーザー登録
	2. パスワードリセット
	3. ログイン認証
	4. ログアウト
	5. 多言語化対応した Blade テンプレートビュー
	6. ユーザー認証機能に必要な DB（SQLite3） 設置 & 設定

* PHP ビルトインサーバー

## Install

```
$ git clone https://github.com/ontheroadjp/Gulp-Laravel-AdminLTE.git 
$ cd Gulp-PHP-AdminLTE
$ npm install
$ gulp
```

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
