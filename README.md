git clone 

cp env.example .env 

change credentials for your database

composer install

php artisan key generate

php artisan migrate

php artisan db:seed

it will generate the following users

    email: superadmin@superadmin.com 
    password: superadmin 
    role: superadmin (can create admins)

    email: admin@admin.com 
    password: adminadmin 
    role: admin (can create import from url)

    email: user@user.com 
    password: useruser 
    role: user (only can create posts)


php artisan passport:install

php artisan serve


