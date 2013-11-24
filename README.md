//create defauld symfony project
php composer.phar create-project symfony/framework-standard-edition ./blog

//create bundle
php app/console generate:bundle --namespace=Blogger/BlogBundle --format=yml



// generate seters and geters according to annotations
php app/console doctrine:generate:entities Blogger

//
php app/console doctrine:generate:entities Blogger\BlogBundle


// 
php app/console assets:install web --symlink



// create database
php app/console doctrine:database:create

// creating table according to models
php app/console doctrine:schema:create

//
php app/console doctrine:schema:update --force




php app/console cache:clear
