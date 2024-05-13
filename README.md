The following is project's information :
- Used Database : sqlite (There is no need to credential)

cd <project_path>/palmcode_backend
cp .env.example .env
php artisan migrate 

php artisan db:seed //this command is used to populate random data to database. Great to make our own starting point

php artisan serve --port 8080 //command to run laravel server

This is my config in .bash_profile (might be help)
alias php="/Applications/XAMPP/xamppfiles/bin/php"
alias composer="php /usr/local/bin/composer.phar"
export ANDROID_HOME=/Users/maphubs/Library/Android/sdk
export PATH=$PATH:$ANDROID_HOME/emulator
export PATH=$PATH:$ANDROID_HOME/tools
export PATH=$PATH:$ANDROID_HOME/tools/bin
export PATH=$PATH:$ANDROID_HOME/platform-tools
