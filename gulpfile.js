
var gulp = require('gulp');
var shell = require('gulp-shell');

// var del = require('del');
// var runSequence = require('run-sequence');

gulp.task('laravel-install',shell.task([ 
	'echo "=== install bower components ..."',
	'bower install',

	'echo "=== install Laravel ..."',
	'composer create-project laravel/laravel --prefer-dist laravel',

	'echo "=== initialize Laravel ..."',
	'mv laravel/gulpfile.js laravel/gulpfile.js.original',
	'mv laravel/package.json laravel/package.json.original',
	'cp -r laravel/public laravel/public_original',
	'ln -s ../bower.json laravel/bower.json',
	'ln -s ../bower_components laravel/bower_components',
	'ln -s ../gulpfile-for-laravel.js laravel/gulpfile.js',
	'ln -s ../node_modules laravel/node_modules',
	'ln -s ../package.json laravel/package.json',
	'ln -s ../src laravel/src',

	// /app/Http/Controllers
	//'cp -r laravel/app/Http/Controllers/* src/app/Controllers',
	//'rm -rf laravel/app/Http/Controllers',
	//'ln -s ../../src/app/Controllers laravel/app/Http/Controllers',

	// /app/Models
	//'ln -s ../src/app/Models laravel/app/Models',

	//resources/views
	//'cp -r laravel/resources/views/* src/app/views',
	//'rm -rf laravel/resources/views',
	//'ln -s ../src/app/views laravel/resources/views',

	// /resources/lang
	//'cp -r laravel/resources/lang/* src/app/lang',
	//'rm -rf laravel/resources/lang',
	//'ln -s ../src/app/lang laravel/resources/lang',

	// /database/migrations
	//'cp -r laravel/database/migrations/* src/app/migrations',
	//'rm -rf laravel/database/migrations',
	//'ln -s ../src/app/migrations laravel/database/migrations',

	// /database/seeds
	//'cp -r laravel/database/seeds/* src/app/seeds',
	//'rm -rf laravel/database/seeds',
	//'ln -s ../src/app/seeds laravel/database/seeds',

	// modify /config/app.php, /composer.json
	'sh bin/init.sh',
]));

gulp.task('default',['laravel-install']);


