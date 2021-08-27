##How to use
1. composer install and env configurations.
2. npm install && npm run production.
3. create products directory to storage/app/public and add some image for product | and run php artisan storage:link
4. php artisan migrate.
5. php artisan db:seed --class=RolesSeeder, php artisan db:seed --class=UsersSeeder 
6. Go to your website - example.com/login and login with cred. 
username - ShopAdmin, password 123456 and you can add productions.
7. Logout from admin and try to order products on website. your domain - example.com
