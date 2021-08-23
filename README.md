Mail : 

php artisan make:mail MailClassExample  
php artisan vendor:publish --tag=laravel-mail  

change QUEUE in .env from sync to database( or other driver )


queue and job :

php artisan queue:table 

php artisan migrate/fresh

php artisan queue:work  
(to listen to all possible queue's called in system)



To custumize queue we use jobs

php artisan make:job jobname

#php artisan make:job MailClassExample  

jwt

