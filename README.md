



## Laravel, Dusk -  Build a web application with Laravel and test it with Dusk
Here is a SPA (Single Page Application) based on the previous API presented in the previous post. The idea is to introduce the EJS Templating Engine to expose data to the user. This is a simple and basic CRUD application (Create, Read, Update, Delete) using Node.js, Express, MySQL & EJS Templating Engine. It has also test included made with Cheerio and Documentation (Apidoc)


**Creating database and table**
You must create a database named **db_laravel_people** and let Laravel create the table and content via migration, seeds and Faker

```
create database db_laravel_people;
use db_laravel_people;

```


### Requirements

To follow the step by step describe in the post, it will require a database, composer and Laravel.


**Install MySQL**<br />

In order to manage this application, you will need a MySQL database. To install and manage MySQL, there a [quick and simple explanation at install MySQL on macOS](https://sequelpro.com/docs/ref/mysql/install-on-osx) and at the same time, you can [install also Sequel Pro]: (https://sequelpro.com/). Sequel Pro is a FREE and excellent tool to manage on a MAC, a MySQl databases.



**Install Composer globally**<br />
You need to have Composer installed globally on your Mac.

```
$ curl -sS https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer
```
[Get composer](https://getcomposer.org/)


### Quick Presentation

You can read the article or not. The first part will be creating a quick and dirty web application with Laravel and then we will make a quick introduction to Dusk.

**1. Two things you need to know before diving**<br />


**1. The APP_URL**
The first thing to do is to change your APP_URL. In order to Dusk access your application and test it, you have to change your local development URL editing the .env file. By default, the APP_URL is http://localhost. If you are running your server in another port, for example 8000, change it to http://localhost:8000. If you keep http://localhost, Dusk will not be able to test your app.

**In my example, the APP_URL=http://127.0.0.1:8000 in .env**


**2. The DB**
The second thing is to create a database named for instance db_laravel_people and change the .env by adding the correct databasename (db_laravel_people), username (root) and password (root).

**Extract from the .env**
```
APP_URL=http://127.0.0.1:8000

LOG_CHANNEL=stack

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_laravel_people
DB_USERNAME=root
DB_PASSWORD=root
```
**3. How to proceed**<br />
The best thing to do is follow the step by step in the post and just use the files in the repository into the repository as models.

**4. More information**<br />
For those, who are looking for more information, a full article is available with additional resources is available @ [flaven.fr](http://flaven.fr/)


### Clone this repository

For those, you want to get the code directly, you can use the following command.

```
$ git clone https://github.com/bflaven/laravel-dusk-testing-people-app.git
```















