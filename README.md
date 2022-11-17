Technologies
Languages: PHP 8.1.2, JavaScript
Frameworks: Laravel 9, VueJS
Database: MySQL
ORM: Eloquent
VCS: GIT, GitHub

Installation
!!! CAUTION : you should take care of .env file. You should put there your DB configs. !!!

$ composer install
$ php artisan migrate
$ php artisan db:seed
$ npm install
$ npm run dev

Routing
Auth
/login - for registered users access
/register - use to register
/logout - for logout

Post
/ and /posts - main page with posts.
/post/{postID} - Page with whole Post.
/posts/create - Create new post page.
/posts/{postID}/edit/ - Edit specific post page.

User
/users - Page where Admin able to change users roles or delete users.
/users/{userId} - Personal area where user able to see all own posts, edit or delete them.
/user/profile - Page for managing user account.
