The following is project's information :
- Used Database : sqlite (There is no need to credential)
- This project related with [Frontend](https://github.com/LuthfanM/PL-Advanced-Landing-Page).

```bash
composer install //install dependencies

cd <project_path>/palmcode_backend
cp .env.example .env
php artisan migrate //create our database

php artisan db:seed //this command is used to populate random data to database. Great to make our own starting point

php artisan serve --port 8080 //command to run laravel server. Required so we can store data to sqlite db
```


This is my config in .bash_profile (might be help)
```bash
alias php="/Applications/XAMPP/xamppfiles/bin/php"
alias composer="php /usr/local/bin/composer.phar"
export ANDROID_HOME=/Users/maphubs/Library/Android/sdk
export PATH=$PATH:$ANDROID_HOME/emulator
export PATH=$PATH:$ANDROID_HOME/tools
export PATH=$PATH:$ANDROID_HOME/tools/bin
export PATH=$PATH:$ANDROID_HOME/platform-tools
```

In case you need to see available provided api, check api.php
To test with Postman (or anything) if api already working
```bash

GET http://127.0.0.1:8080/api/surfers

```
