

# Requirment
* PHP 7
* Laravel 5.7
* mysql
* apache server

# Installation

1 . git clone https://github.com/behzad-fz/ecommerce.git

2 .install composer

3 . create a db named "ecomerce" (or what ever you want)

4.  in .env file add these changes

DB_CONNECTION=mysql 
DB_HOST=127.0.0.1   
DB_PORT=3306    
DB_DATABASE=eccomerce (or what ever you named your db)  
DB_USERNAME=root    
DB_PASSWORD=

MAIL_DRIVER=smtp    
MAIL_HOST=smtp.gmail.com    
MAIL_PORT=587   
MAIL_USERNAME=*****@gmail.com (your email)  
MAIL_PASSWORD=*****(your password)  
MAIL_ENCRYPTION=null

5. php artisan key:generate


6. php artisan migrate

7.php artisan db:seed --class=UsersTableSeeder

8.sign in
username:fazelasl@yahoo.com
password:123456

{num 9 and 10 are optional but to see full performance you better do them}}

9. go to category management and add couple of categories

10. go to product managment and add some products (at least 4 item to see full view)

you are good to go



