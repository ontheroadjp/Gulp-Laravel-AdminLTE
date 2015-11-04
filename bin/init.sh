
cd laravel

# -----------------------------------------
# gulp build
# -----------------------------------------
echo "=== gulp build ..."
gulp build

# -----------------------------------------
# DB INSTALL(SQLite3)
# -----------------------------------------
echo "=== install DB ..."

chmod 777 storage
ln -s ../../src/storage/database.sqlite storage/database.sqlite
gsed -i -e "s/'default' => env('DB_CONNECTION', 'mysql'),$/'default' => env\('DB_CONNECTION', 'sqlite'\),/" config/database.php

echo "complete!"
echo ""

# -----------------------------------------
# create DB tables(migrations)
# -----------------------------------------
echo "create DB tables"
php artisan migrate

echo "complete!"
echo ""

# -----------------------------------------
# INSTALL laravel-auth
# -----------------------------------------
echo "==== Install Auth Service Provider ..."

ln -s ../../src/vendor/ontheroadjp vendor/

# Add Service Provider.
gsed -i -e "/^ *'providers' => \[$/a \\\t\\t\\t\\tOntheroadjp\\\LaravelAuth\\\Providers\\\LaravelAuthServiceProvider::class," config/app.php

# Add auto loader.
gsed -i -e '/^ *\"psr-4\": {$/a \\t\t\t\t\t\t"Ontheroadjp\\\\\LaravelAuth\\\\": "vendor/ontheroadjp/laravel-auth/",' composer.json

# Copy required JQuery plugin
cp -r ../bower_components/AdminLTE/plugins/iCheck public/js/

# exec. dump-autoload.
composer dump-autoload

# exec. vendor:publishl
php artisan vendor:publish

echo "complete!"
echo ""

# -----------------------------------------
# INSTALL laravel-gettext
# -----------------------------------------
echo "==== Install GetText Service Provider ..."

# Copy Package
#cp -r src/vendor/xinax vendor/
#sleep 5s

ln -s ../../src/vendor/xinax vendor/

# Add Service Provider.
gsed -i -e "/^ *'providers' => \[$/a \\\t\\t\\t\\tXinax\\\LaravelGettext\\\LaravelGettextServiceProvider::class," config/app.php

# Add Middleware.
gsed -i -e '/^ *protected $middleware = \[$/a \\t\t\\Xinax\\LaravelGettext\\Middleware\\GettextMiddleware::class,' app/Http/Kernel.php

# Add auto roader.
gsed -i -e '/^ *\"psr-4\": {$/a \\t\t\t\t\t\t"Xinax\\\\\LaravelGettext\\\\": "vendor/xinax/laravel-gettext/src/Xinax/LaravelGettext/",' composer.json

# exec. dump-autoload.
composer dump-autoload

# exec. vendor:publishl
php artisan vendor:publish

# Modify config file.
#gsed -i -e "/^ *'supported-locales' => array($/a \\\t\\t\\t\\t'ja_JP'," config/laravel-gettext.php

echo "complete!"
echo ""

