# Sneakers_Life
Getting Started for Students

Prerequisites

Check composer is installed
Check yarn & node are installed
Install

Clone this project
Run composer install
Run yarn install
Run yarn encore dev to build assets
Working

Run symfony server:start to launch your local php web server
Run yarn run dev --watch to launch your local server for assets (or yarn dev-server do the same with Hot Module Reload activated)
Testing

Run php ./vendor/bin/phpcs to launch PHP code sniffer
Run php ./vendor/bin/phpstan analyse src --level max to launch PHPStan
Run php ./vendor/bin/phpmd src text phpmd.xml to launch PHP Mess Detector
Run ./node_modules/.bin/eslint assets/js to launch ESLint JS linter
Windows Users

If you develop on Windows, you should edit you git configuration to change your end of line rules with this command:

git config --global core.autocrlf true

The .editorconfig file in root directory do this for you. You probably need EditorConfig extension if your IDE is VSCode.

Run locally with Docker

Fill DATABASE_URL variable in .env.local file with DATABASE_URL="mysql://root:password@database:3306/<choose_a_db_name>"
Install Docker Desktop an run the command:
docker-compose up -d
Wait a moment and visit http://localhost:8000
